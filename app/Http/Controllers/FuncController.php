<?php

namespace App\Http\Controllers;

use App\Models\MaterialType;
use App\Models\ProductType;

class FuncController extends Controller
{
    // Метод из 4ого задания
    function calculateQuantityMaterial(
        int   $productTypeId,     // Идентификатор типа продукции
        int   $materialTypeId,    // Идентификатор типа материала
        int   $productCount,      // Количество получаемой продукции
        float $param1,
        float $param2,
        float $stockMaterial      // Количество материала на складе
    ): int
    {
        try {
            // Проверка на валидные типы и значения
            if (
                $productCount <= 0      // Если нужно получить меньше или 0 продуктов, то это не верные данные
                || $param1 <= 0         // Параметры обязательно больше 0, иначе обнулят вычисления
                || $param2 <= 0
                || $stockMaterial < 0   // Количество товара на складе не может быть меньше 0
            ) {
                return -1;
            }

            // Получаем тип продукции
            $productType = ProductType::findOrFail($productTypeId);

            // Получаем тип материала
            $materialType = MaterialType::findOrFail($materialTypeId);

            // Расчёт потребности на одну единицу продукции
            $materialPerUnit = $param1 * $param2 * $productType->coefficient;

            // Общее количество материала с учётом количества продукции
            $totalMaterial = $materialPerUnit * $productCount;

            // Учёт процента брака
            $wastePercent = $materialType->defect;
            $totalMaterialWithWaste = $totalMaterial * (1 + $wastePercent / 100);

            // Вычитаем наличие на складе
            $requiredToPurchase = $totalMaterialWithWaste - $stockMaterial;

            // Округляем до нуля и возвращаем целое число (с округлением до целого)
            return max(0, (int)ceil($requiredToPurchase));
        } catch (\Throwable $ex) {
            return -1;
        }
    }
}
