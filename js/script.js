$(document).ready(function (){
    $("#ajax_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../php/leads.php",
            data: $(this).serialize(e),
            success: function(r) {
                console.log(r);
                if(r=="not_FIO_EMAIL_PHONE")
                    {
                        alert("Заполните поля: ФИО, Телефон, Почта!!!!!!!");
                    }
                if(r=="not_FIO_EMAIL")
                    {
                        alert("Заполните поля: ФИО, Почта!!!!!!!");
                    }
                if(r=="not_FIO_PHONE")
                    {
                        alert("Заполните поля: ФИО, Телефон!!!!!!!");
                    }
                if(r=="not_EMAIL_PHONE")
                    {
                        alert("Заполните поля: Почта, Телефон!!!!!!!");
                    }
                 if(r=="not_FIO")
                    {
                        alert("Заполните поля: ФИО!!!!!!!");
                    }
                if(r=="not_EMAIL")
                    {
                        alert("Заполните поля: Почта!!!!!!!");
                    }
                if(r=="not_PHONE")
                    {
                        alert("Заполните поля: Телефон!!!!!!!");
                    }
                if(r=="true")
                    {
                        alert("Ваши данные сохраненны!");
                    }
                if(r=="false")
                    {
                            alert("Ошибка при записи данных, обратитесь к администрации сайта!");
                    }
                
            }
        })
    });

   


})
