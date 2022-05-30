<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE FUNCTION create_diary(id_doctor INTEGER, start_date DATE, end_date DATE, start_time TIME, end_time TIME) RETURNS INTEGER
                BEGIN
                    DECLARE now_date DATE;
                    DECLARE now_time TIME;
                    SET now_date = start_date;
                    SET now_time = start_time;

                    LOOP1: WHILE now_date <= end_date DO
                        LOOP2: WHILE now_time <= end_time DO
                        INSERT INTO diaries (id_doctor, date_diary) VALUES (id_doctor, TIMESTAMP(now_date, now_time));
                        SET now_time = ADDTIME(now_time, '00:30:00');
                        END WHILE LOOP2;
                        SET now_date = DATE_ADD(now_date,INTERVAL 1 DAY);
                        SET now_time = start_time;
                    END WHILE LOOP1;

                    RETURN 0;
                END
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_function');
    }
};
