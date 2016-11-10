# test_last
last test task
## task
Должно быть поле для ввода адреса сайта
Вводим в это поле адрес - и скрипт выполняет следующие проверки
 
1. Наличие на сайте файла robots.txt
2. Код ответа сервера файла robots.txt
3. Вес robots.txt
4. Наличие директивы Host в файле robots.txt
и т.д.
 
По результатом проверок должна выводиться вот такая [таблица](#table)
В таблице выводится только 1 состояние
Или ОК
Или ОШИБКА
 
Полный список проверок для тестового задания и вид таблицы - всё в файле.
 
Просьба выложить результат на хостинг  и прислать ссылку. Плюс отдельно прислать сам код для ознакомления.
also send em link on repo

### table
<table>
    <tr>
        <th>№</th>
        <th>Название проверки</th>
        <th>Статус</th>
        <th></th>
        <th>Текущее состояние</th>
    </tr>
    <tr>
        <td rowspan="4">1</td>
        <td rowspan="4">Проверка наличия файла robots.txt</td>
        <td rowspan="2">Ок</td>
        <td>Состояние</td>
        <td>Файл robots.txt присутствует</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Доработки не требуются</td>
    </tr>
    <tr>
        <td rowspan="2">Ошибка</td>
        <td>Состояние</td>
        <td>Файл robots.txt отсутствует</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Программист: Создать файл robots.txt и разместить его на сайте.</td>
    </tr>
    <tr>
        <td rowspan="4">6</td>
        <td rowspan="4">Проверка указания директивы Host</td>
        <td rowspan="2">Ок</td>
        <td>Состояние</td>
        <td>Директива Host указана</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Доработки не требуются</td>
    </tr>
    <tr>
        <td rowspan="2">Ошибка</td>
        <td>Состояние</td>
        <td>В файле robots.txt не указана директива Host</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Программист: Для того, чтобы поисковые системы знали, какая версия сайта является основных зеркалом,
            необходимо прописать адрес основного зеркала в директиве Host. В данный момент это не прописано. Необходимо
            добавить в файл robots.txt директиву Host. Директива Host задётся в файле 1 раз, после всех правил.
        </td>
    </tr>
    <tr>
        <td rowspan="4">8</td>
        <td rowspan="4">Проверка количества директив Host, прописанных в файле</td>
        <td rowspan="2">Ок</td>
        <td>Состояние</td>
        <td>В файле прописана 1 директива Host</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Доработки не требуются</td>
    </tr>
    <tr>
        <td rowspan="2">Ошибка</td>
        <td>Состояние</td>
        <td>В файле прописано несколько директив Host</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Программист: Директива Host должна быть указана в файле толоко 1 раз. Необходимо удалить все
            дополнительные директивы Host и оставить только 1, корректную и соответствующую основному зеркалу сайта
        </td>
    </tr>
    <tr>
        <td rowspan="4">10</td>
        <td rowspan="4">Проверка размера файла robots.txt</td>
        <td rowspan="2">Ок</td>
        <td>Состояние</td>
        <td>Размер файла robots.txt составляет __, что находится в пределах допустимой нормы</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Доработки не требуются</td>
    </tr>
    <tr>
        <td rowspan="2">Ошибка</td>
        <td>Состояние</td>
        <td>Размера файла robots.txt составляет __, что превышает допустимую норму</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Программист: Максимально допустимый размер файла robots.txt составляем 32 кб. Необходимо отредактировть
            файл robots.txt таким образом, чтобы его размер не превышал 32 Кб
        </td>
    </tr>
    <tr>
        <td rowspan="4">11</td>
        <td rowspan="4">Проверка указания директивы Sitemap</td>
        <td rowspan="2">Ок</td>
        <td>Состояние</td>
        <td>Директива Sitemap указана</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Доработки не требуются</td>
    </tr>
    <tr>
        <td rowspan="2">Ошибка</td>
        <td>Состояние</td>
        <td>В файле robots.txt не указана директива Sitemap</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Программист: Добавить в файл robots.txt директиву Sitemap</td>
    </tr>
    <tr>
        <td rowspan="4">12</td>
        <td rowspan="4">Проверка кода ответа сервера для файла robots.txt</td>
        <td rowspan="2">Ок</td>
        <td>Состояние</td>
        <td>Файл robots.txt отдаёт код ответа сервера 200</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Доработки не требуются</td>
    </tr>
    <tr>
        <td rowspan="2">Ошибка</td>
        <td>Состояние</td>
        <td>При обращении к файлу robots.txt сервер возвращает код ответа (указать код)</td>
    </tr>
    <tr>
        <td>Рекомендации</td>
        <td>Программист: Файл robots.txt должны отдавать код ответа 200, иначе файл не будет обрабатываться. Необходимо 
            настроить сайт таким образом, чтобы при обращении к файлу robots.txt сервер возвращает код ответа 200
        </td>
    </tr>
</table>
