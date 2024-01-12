<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Метод, который выполняется при применении миграции.
     */
    public function up(): void
    {
        // Создание таблицы 'workers'
        Schema::create('workers', function (Blueprint $table) {
            // Уникальный идентификатор для каждого работника
            $table->id();

            // Имя работника
            $table->string('name');

            // Фамилия работника
            $table->string('surname');

            // Адрес электронной почты работника
            $table->string('email');

            // Возраст работника (может быть пустым)
            $table->integer('age')->nullable();

            // Описание работника (может быть пустым)
            $table->text('description')->nullable();

            // Статус семейного положения работника, по умолчанию - не женат/не замужем
            $table->boolean('is_married')->default(false);

            // Дата и время создания и последнего обновления записи
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Метод, который выполняется при отмене миграции.
     */
    public function down(): void
    {
        // Удаление таблицы 'workers'
        Schema::dropIfExists('workers');
    }
};
