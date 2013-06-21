<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->timestamps();
//			Тема задачи (строка, 255 символов)
			$table->string('subject');
//			Проект к которому относится задача (идентификатор проекта)
			$table->integer('project_id');
//			Автор задачи (идентификатор пользователя)
			$table->integer('author_id');
//			Исполнитель задачи - на кого назначена (идентификатор пользователя)
			$table->integer('assigned_to_id');
//			Плановые дата начала и дата выполнения (формат датавремя)
			//--Пока нет, и вообще лучше имхо сделать отдельно(планирование отдельное)
//			Фактические дата начала и дата выполнения (формат датавремя)
			//--тоже саомое
//			Трудозатраты (в часах, число int)
			//--расчитыается из когда закончил - когда взял(паузы тоже стоит учитывать)
			$table->dateTime('started_at');
			$table->dateTime('ended_at');
//			Описание задачи (текст, не более 10к символов)
			$table->text('description');
//			Список дел которые необходимо выполнить в этой задаче
			//--отдельно
//			Журнал задачи - что и кто делал с этой задачей. Но это должно быть отдельно от комментариев
			//--отдельно
//			Комментарии - обсуждение
			//--отдельно
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issues');
	}

}
