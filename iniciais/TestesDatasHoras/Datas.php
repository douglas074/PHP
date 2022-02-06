<?php

    //Usando a função date:
        //Apenas data, pegar o somente os dois últimos valores do ano, usa-se o 'Y' em minúsculo.
        $date = date('d/m/Y');
        echo $date;

        //Para pegar a data e a hora usa-se:
        $dateHour = date('d/m/Y H:i');
        echo $dateHour;

    //Usando DateTime(), deve-se criar uma nova instância desse objeto:
        $dateTime = new DateTime();
        echo $dateTime->format('d/m/Y H:i');

        /**Pode-se adicionar formatos e expecificar a data que
        será formatada, usando yesterday. a data desejada e afins.**/
            $now = new DateTime('now');
            $yesterday = new DateTime('yesterday');
            $day15 = new DateTime('2019-03-15');

            //E pode também concatenar uma formatação e a data desejada:
                $format = 'd/m/Y';
                $stringDay15 = '15/03/2019';
                $day15 = DateTime::createFromFormat($format, $stringDay15);

                /**Para comparar duas váriaveis e ver a diferença de horas
                entre elas, deve-se usar o comando diff, que vem junto com
                a interface DateTimeInterface.**/
                    $input = new DateTime('09:00');
                    $exit = new DateTime('18:00');
                    $interval = $exit->diff($input);
                    print_r($interval->h);

                    //Tratar fuso horário:
                        $timeZone = new DateTimeZone('America/Sao_Paulo');
                        $now = new DateTime('now', $timeZone);

    //Para que a data de uma váriavel torne-se imutável deve-se usar a interface DateTimeImmutable.
        $immutable = new DateTimeImmutable();
        echo $immutable;

    //Para trabalhar com períodos de datas, pode-se usar DatePeriod
        $start = new DateTime('2022-11-21');
        $interval = new DateInterval('P4Y');
        $end = new DateTime('2042');
        $period = new DatePeriod($start, $interval, $end);

foreach ($period as $date) {
    echo $date->format('d/m/Y');
}
