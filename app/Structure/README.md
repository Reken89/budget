# Администрация Костомукшского городского округа
### СТРУКТУРА модулей

** APISection ** Работа по curl запросам сервера
** AdminSection ** Панель администратора
** BlockSection ** Стоп лист, нужен для отображения "заглушки"
** BuildSection ** Модуль содержащий таблицу строительство                      # Модуль не используется!
** CSection ** Модуль содержащий таблицу 1С                                     # Модуль не используется!
** CommunalSection ** Модуль содержащий таблицу коммунальных услуг              # Архивный модуль
** CountSection ** Модуль содержащий бюджет 2024-2026 года                      # Архивный модуль
** Count24Section ** Модуль содержащий бюджет 2025-2027 года                    # Архивный модуль
** Count25Section ** Модуль содержащий бюджет 2026-2028 года
** DeloSection ** Модуль содержащий таблицу "Делопроизводство"
** DevSection ** Модуль содержащий разработку                                   # Модуль не используется!
** ForecastSection ** Модуль содержащий таблицу прогноза коммунальных услуг     # Архивный модуль
** Forecast25Section ** Модуль прогноза коммунальных услуг 2025   
** Ofs25Section ** Модуль содержащий таблицу ОФС 2025 года
** Ofs2024Section ** Модуль содержащий таблицу ОФС 2024 года                    # Архивный модуль
** Ofs24Section ** Модуль содержащий таблицу ОФС 2024 года                      # Модуль не используется!
** OfsSection ** Модуль содержащий таблицу ОФС 2023 года                        # Архивный модуль
** ReportingSection ** Модуль контролирующий работу сайта "Бюджет для граждан"  # Модуль не используется!
** TaxSection ** Модуль содержащий таблицу загрузки информации из ФНС           # Модуль не используется!
** UserSection ** Вспомогательный модуль
** UtilitiesSection ** Модуль содержащий таблицу коммунальных услуг

# Техническое содержание модулей

** Actions ** Класс, содержащий в себе бизнес логику
** Controllers ** Класс, указывающий другим классам что нужно сделать
** Dto ** Класс типизации данных
** Exports ** Класс для работы с библиотекой Excel
** Models ** Модель содержащая базовые настройки таблицы и связи (Eloquent)
** Requests ** Класс валидации данных
** Tasks ** Класс для разгрузки класса Actions, выполняет вспомогательные задачи