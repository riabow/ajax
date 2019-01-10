

========================

Тестовое задание:

Тестовое задание необходимо сделать без движков (без CMS, без фреймворков):
Чем проще задание будет выполнено - тем лучше. Меньше классов, меньше функций, меньше кода - только в плюс. Проверяться будет:
- аккуратность кода
- безопасность решений
- корректность выполнения задачи
Создавать целую MVC структуру тут ни к чему, можно даже выполнить в 1 файле задачу. (оценка будет по другим критериям)

=================
1) HTML страница полностью со всеми необходимыми тегами, подключаем jquery.
2) PHP+MySQL. В MySQL создаём таблицу "отзывы на сайте". При создании таблицы предусмотрите поиск по полю `email` в случае, c расчётом на то, что в базе будет 20 миллионов и более записей. (Текстом опишите что именно Вы сделали, чтобы в будущем реализовать этот функционал)
3) Сверху выводим форму для отзывов, поля: Имя (минимум 1 символ), email (валидация email), Текст (минимум 1 символ). Отправляются комментарии на AJAX (jquery). Человек должен увидеть, что его комментарий был отправлен.
4) Вывод всех комментариев под формой (постраничка не нужна, не тратьте время). Выводим имя, дата (в формате d.m.Y H : i : s ), email, текст комментария.
================

Предоставить архив с кодом + sql дампом таблицы, или залитым на github проектом
