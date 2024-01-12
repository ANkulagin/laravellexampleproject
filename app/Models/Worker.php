<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Модель Worker, представляющая сущность работника.
 * Использует трейт HasFactory для упрощения создания фабрик и сидеров.
 */
/**
 * @method static create(mixed $data)
 */
class Worker extends Model
{
    use HasFactory;

    /**
     * Название таблицы в базе данных, с которой связана модель.
     */
    protected $table = 'workers';

    /**
     * Список атрибутов модели, которые не могут быть заполнены массово.
     * В данном случае заполнение массово разрешено для всех атрибутов,
     * так как свойство $guarded установлено в false.
     * В реальном проекте может потребоваться более точное управление,
     * определяя, какие атрибуты можно массово заполнять, а какие нет.
     */
    protected $guarded = false;

    /**
     * Ниже могут следовать дополнительные методы и отношения модели Worker.
     * Например, отношения с другими моделями, методы доступа и т. д.
     */
}
