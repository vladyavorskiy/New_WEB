<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CountryControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return response(Country::limit($request->perpage ?? 5)
            ->offset(($request->perpage ?? 5) * ($request->page ?? 0))
            ->get());
    }

    public function total(){
        return response(Country::all()->count());
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        if (!Gate::allows('create-country')) {
            return response()->json([
                'code' => 1,
                'message' => 'У вас нет прав на добавление категории',
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|unique:countries|max:255',
            'capital' => 'required|unique:countries|max:255',
            'population' => 'required|integer',
            'area' => 'required|integer',
            'image' => 'required|file',
        ]);

        $file = $request->file('image');
        $fileName = rand(1, 100000) . '_' . $file->getClientOriginalName();

        if (!$file || !$file->isValid()) {
            return response()->json(['message' => 'Некорректный файл'], 400);
        }
        try {
            $path = Storage::disk('s3')->putFileAs('country_pictures', $file, $fileName);
            if (empty($path)) {
                return response()->json([
                    'code' => 3,
                    'message' => 'Ошибка: файл не был загружен в хранилище.',
                ]);
            }
            Storage::disk('s3')->setVisibility($path, 'public');
            $fileUrl = Storage::disk('s3')->url($path);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 2,
                'message' => 'Ошибка загрузки файла в хранилище: ' . $e->getMessage(),
            ]);
        }

        $country = new Country($validated);
        $country->picture_url = $fileUrl;
        $country->save();

        return response()->json([
            'code' => 0,
            'message' => 'Страна успешно добавлена',
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response(Country::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);
        if (!$country) {
            return response()->json([
                'code' => 1,
                'message' => 'Страна не найдена',
            ]);
        }

        if (!Gate::allows('destroy-country', $country)) {
            return response()->json([
                'code' => 2,
                'message' => 'У вас нет прав для удаления',
            ]);
        }

        try {
            if ($country->picture_url) {
                $filePath = ltrim(parse_url($country->picture_url, PHP_URL_PATH), '/');
                Storage::disk('s3')->delete('27518_Flag_of_Belarus.svg.png');
            }
            $country->delete();
            return response()->json([
                'code' => $filePath,
                'message' => 'Страна успешно удалена',
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 3,
                'message' => 'Ошибка удаления',
            ]);
        }
    }

}
