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
    }
}
