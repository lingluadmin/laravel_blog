<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id')->comment('文章表');
            $table->char('title',100)->comment('文章名称');
            $table->char('keywords',100)->comment('关键字');
            $table->text('intro')->comment('介绍');
            $table->string('picture',100)->comment('图片');
            $table->string('images', 100)->comment('图片集');
            $table->char('description',200)->comment('描述');
            $table->text('content')->comment('文章内容');
            $table->char('source',30)->comment('网络-INTERNET，个人-MYSELF');
            $table->string('source_link',200)->comment('网址来源');
            $table->char('tags',20)->comment('标签');
            $table->tinyInteger('status')->comment('状态 100-未发布，200-发布')->default(100);
            $table->tinyInteger('sort_num')->comment('排序')->default(0);
            $table->tinyInteger('is_top')->comment('是否置顶')->default(0);
            $table->char('author',30)->comment('创建人');
            $table->char('mypoint',100)->comment('我的描述');
            $table->timestamp('publish_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('发布时间');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
