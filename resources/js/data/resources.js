export default {
    faculty: {
        fields: [
            {name: 'faculty_number', title: 'Номер факультета'},
            {name: 'faculty_name', title: 'Название факультета'},
            {name: 'dean_full_name', title: 'ФИО декана'},
            {name: 'dean_phone_number', title: 'Номер телефона декана'},
            {name: 'zup_full_name', title: 'ФИО ЗУП'},
            {name: 'zup_phone_number', title: 'Номер телефона ЗУП'},
        ],
        index: {
            title: 'Факультеты'
        },
        show: {
            getTitle: data => 'Факультет ' + data.faculty_name
        },
        edit: {},
        create: {
            title: 'Добавить факультет'
        }
    },
    ['study-group']: {
        fields: [
            {name: 'group_number', title: 'Номер группы'},
            {name: 'headman_full_name', title: 'ФИО старосты'},
            {name: 'headman_phone_number', title: 'Номер телефона старосты'},
            {name: 'course', title: 'Курс'},
        ],
        index: {
            title: 'Учебные группы'
        },
        show: {
            getTitle: data => data.group_number + ' группа'
        },
        create: {
            title: 'Добавить учебную группу'
        }
    },
    contract: {
        fields: [
            {name: 'date', title: 'Дата договора', type: 'date'},
            {name: 'subject', title: 'Предмет договора'},
            {name: 'term', title: 'Срок действия договора'},
            {name: 'file', title: 'Файл договора', type: 'file'},
        ],
        index: {
            title: 'Договоры'
        },
        show: {
            getTitle: data => 'Договор от ' + data.date
        },
        create: {
            title: 'Добавить договор'
        }
    },
    direction: {
        fields: [
            {name: 'code', title: 'Шифр направления'},
            {name: 'name', title: 'Название направления'},
        ],
        index: {
            title: 'Направления'
        },
        show: {
            getTitle: data => 'Направление ' + data.name
        },
        create: {
            title: 'Добавить направление'
        }
    },
    organization: {
        fields: [
            {name: 'name', title: 'Название'},
            {name: 'address', title: 'Адрес'},
            {name: 'phone_number', title: 'Номер телефона'},
            {name: 'email', title: 'Почта'},
            {name: 'director_full_name', title: 'ФИО руководителя'},
            {name: 'requisites', title: 'Реквизиты'},
        ],
        index: {
            title: 'Организации'
        },
        show: {
            getTitle: data => 'Организация ' + data.name
        },
        create: {
            title: 'Добавить организацию'
        }
    },
    ['practical-training']: {
        fields: [
            {name: 'do', title: 'Дата окончания'},
            {name: 'assessment', title: 'Оценка'},
            {name: 'date_of_protection', title: 'Дата защиты'},
            {name: 'ro_full_name', title: 'ФИО Руководителя организации'},
        ],
        index: {
            title: 'Прохождения практики'
        },
        show: {
            getTitle: data => 'Прохождения практики от ' + data.date_of_protection
        },
        create: {
            title: 'Добавить прохождение практики'
        }
    },
    practice: {
        fields: [
            {name: 'name', title: 'Название'},
            {name: 'type', title: 'Вид практики'},
            {name: 'type_of_reporting', title: 'Вид отчетности'},
            {name: 'duration', title: 'Продолжительность практики'},
        ],
        index: {
            title: 'Практики'
        },
        show: {
            getTitle: data => 'Практика ' + data.name
        },
        create: {
            title: 'Добавить практику'
        }
    },
    ['practice-documents']: {
        fields: [
            {name: 'name', title: 'Название'},
            {name: 'type', title: 'Вид'},
            {name: 'file', title: 'Файл', type: 'file'},
        ],
        index: {
            title: 'Документы практики'
        },
        show: {
            getTitle: data => 'Документ практики ' + data.name
        },
        create: {
            title: 'Добавить документ практики'
        }
    },
    profile: {
        fields: [
            {name: 'name', title: 'Название'},
        ],
        index: {
            title: 'Профили'
        },
        show: {
            getTitle: data => 'Профиль ' + data.name
        },
        create: {
            title: 'Добавить профиль'
        }
    },
    ['reporting-documents']: {
        fields: [
            {name: 'name', title: 'Название'},
            {name: 'file', title: 'Файл', type: 'file'},
        ],
        index: {
            title: 'Документы отчетности'
        },
        show: {
            getTitle: data => 'Документ отчетности ' + data.name
        },
        create: {
            title: 'Добавить документы отчетности'
        }
    },
    student: {
        fields: [
            {name: 'student_full_name', title: 'ФИО'},
            {name: 'passport_series', title: 'Серия паспорта'},
            {name: 'passport_number', title: 'Номер паспорта'},
            {name: 'birth_date', title: 'Дата рождения'},
            {name: 'place_of_issue_of_the_passport', title: 'Место выдачи паспорта'},
            {name: 'date_of_issue_of_the_passport', title: 'Дата выдачи паспорта'},
            {name: 'credit_card_number', title: 'Номер зачётной книжки'},
            {name: 'phone_number', title: 'Номер мобильного телефона'},
            {name: 'gender', title: 'Пол'},
            {name: 'address', title: 'Адрес'},
            {name: 'email', title: 'Почта'},
        ],
        index: {
            title: 'Студенты'
        },
        show: {
            getTitle: data => 'Студент ' + data.student_full_name
        },
        create: {
            title: 'Добавить студента'
        }
    },
    teacher: {
        fields: [
            {name: 'full_name', title: 'ФИО'},
            {name: 'birth_date', title: 'Дата рождения'},
            {name: 'phone_number', title: 'Номер телефона'},
            {name: 'address', title: 'Адрес'},
            {name: 'email', title: 'Почта'},
            {name: 'academic_degree', title: 'Ученая степень'},
            {name: 'academic_title', title: 'Ученое звание'},
            {name: 'work_experience', title: 'Стаж работы'},
        ],
        index: {
            title: 'Педагоги'
        },
        show: {
            getTitle: data => 'Педагог ' + data.full_name
        },
        create: {
            title: 'Добавить педагогa'
        }
    },
    department: {
        fields: [
            {name: 'number', title: 'Номер'},
            {name: 'name', title: 'Название'},
            {name: 'director_full_name', title: 'ФИО руководителя'},
            {name: 'director_phone_number', title: 'Номер телефона руководителя'},
        ],
            index: {
            title: 'Кафедры'
        },
        show: {
            getTitle: data => 'Кафедра ' + data.name
        },
        create: {
            title: 'Добавить кафедру'
        }
    },
}
