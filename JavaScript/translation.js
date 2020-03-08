var textTranslation={


  
        "nav-home":{
            'en': `Home`,

            'bg': `Начало`
        },

        "nav-recipe":{
            'en': `Send a recipe`,

            'bg': `Изпратете рецепта`
        },

        "nav-feedback":{
            'en': `Send feedback`,

            'bg': `Изпратете отзиви`
        },

        "nav-mission":{
            'en': `Mission`,

            'bg': `Цели`
        },

     

        "recipe-yname":{
            'en': `Your name`,

            'bg': `Вашето име`
        },

        "recipe-email":{
            'en': `Your e-mail`,

            'bg': `Вашата ел. поща`
        },
        "recipe-rname":{
            'en': `Recipe Name`,

            'bg': `Име на рецептата`
        },

        "recipe-products":{
            'en': `Products`,

            'bg': `Продукти`
        },

        "recipe-prepare":{
            'en': `How to Make`,

            'bg': `Начин на приготвяне`
        },



        "feedback-fname":{
            'en': `First Name`,

            'bg': `Име`
        },

        "feedback-lname":{
            'en': `Last Name`,

            'bg': `Фамилия`
        },

        "feedback-email":{
            'en': `E-mail`,

            'bg': `Ел. поща`
        },

        "feedback-country":{
            'en': `Your country`,

            'bg': `Вашата държава`
        },

        "feedback-message":{
            'en': `Message`,

            'bg': `Съобщение`
        },

        "mission-text":{
            'en': `<h1><b>Our mission is to make<br>cooking<br> easier and funnier!</b></h1> `,

            'bg': `<h1 ><b>Нашата цел е да направим<br>готвенето<br> по-лесно и по-забавно!</b></h1> `
        },

        "country-0":{
            'en': `Bulgaria`,

            'bg': `България`
        },

        "country-1":{
            'en': `The UK`,

            'bg': `Великобритания`
        },

        "country-2":{
            'en': `The USA`,

            'bg': `САЩ`
        },

        "country-3":{
            'en': `Germany`,

            'bg': `Германия`
        },

        "country-4":{
            'en': `Turkey`,

            'bg': `Турция`
        },

        "country-5":{
            'en': `Serbia`,

            'bg': `Сърбия`
        },

        "country-6":{
            'en': `Greece`,

            'bg': `Гърция`
        },

        "country-7":{
            'en': `France`,

            'bg': `Франция`
        },

        "country-8":{
            'en': `Romania`,

            'bg': `Румъния`
        },

        "country-9":{
            'en': `The Netherlands`,

            'bg': `Нидерландия`
        },

        "country-10":{
            'en': `Croatia`,

            'bg': `Хърватска`
        },

        "country-11":{
            'en': `Egypt`,

            'bg': `Египет`
        },

        "country-12":{
            'en': `Australia`,

            'bg': `Австралия`
        },

        "country-13":{
            'en': `Austria`,

            'bg': `Австрия`
        },

        "country-14":{
            'en': `Russia`,

            'bg': `Русия`
        },

        "country-15":{
            'en': `India`,

            'bg': `Индия`
        },

        "country-16":{
            'en': `Brazil`,

            'bg': `Бразилия`
        },

        "country-17":{
            'en': `South Korea`,

            'bg': `Южна Кореа`
        },

        "country-18":{
            'en': `China`,

            'bg': `Китай`
        },

        "country-19":{
            'en': `Japan`,

            'bg': `Япония`
        },

        "country-20":{
            'en': `Canada`,

            'bg': `Канада`
        },


        


        "feedback-submit":{
            'en': `Submit`,

            'bg': `Изпратете`
        },

        "template":{
            'en': ` `,

            'bg': ` `
        },

        "template":{
            'en': ` `,

            'bg': ` `
        },

        "template":{
            'en': ` `,

            'bg': ` `
        },




};

var currentLanguage = 'bg';
 
function replaceElementText(item, text) {
    if (!item.is("button")) {
        item.html(text);
    } else {
        item.text(text);
    }
}
 
function translate(langId) {
    currentLanguage = langId;
    // Gets all tags that have 'data-lang' attribute present
    $("[data-lang]")
        .each(function() {
            let item = $(this);
            if (textTranslation.hasOwnProperty(item.data("lang")) && textTranslation[item.data("lang")].hasOwnProperty(langId)) {
                let text = textTranslation[item.data("lang")][langId];
                replaceElementText(item, text);
            } else {
                replaceElementText(item, "<font color='red'>" + item.data("lang") + "</font>");
            }
        })
};
 
function getTranslatedText(elementId) {
    return textTranslation[elementId][currentLanguage];
}
