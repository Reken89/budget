<!doctype html>
<html lang="en">
<table>
    <thead>
        <tr>
            <th style="min-width: 150px; width: 150px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Расходы (0104)</th>
            <th style="min-width: 150px; width: 150px;">Резервный фонд (0111)</th>
            <th style="min-width: 150px; width: 150px;">ГО и ЧС (0309)</th>
            <th style="min-width: 150px; width: 150px;">Транспорт (0408)</th>
            <th style="min-width: 150px; width: 150px;">Дорожный фонд (0409)</th>
            <th style="min-width: 150px; width: 150px;">Животные (0405)</th>
            <th style="min-width: 150px; width: 150px;">Город здоровья (0909)</th>
            <th style="min-width: 150px; width: 150px;">Социальная поддержка (1003)</th>
            <th style="min-width: 150px; width: 150px;">Пенсии (1001)</th>
            <th style="min-width: 150px; width: 150px;">Физкультура и спорт (1101)</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0 ; $i < 50 ; $i++)
            <tr>
                <th>Наименование расхода, может содержать большой текст</th>
                <td>7777</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
                <td>10 000 000</td>
            </tr>
        @endfor
    </tbody>
</table>
</html>