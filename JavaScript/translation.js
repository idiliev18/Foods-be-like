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


        "feedback":{
            'en': `<div data-lang="feedback">
            <div class="container">
                <form action="feedbackpro.php" method="POST" >
        
                  <label for="fname" data-lang="feedback-fname">First Name</label>
                  <input type="text" id="fname" name="fname" placeholder="Your name..." required>
              
                  <label for="lname" data-lang="feedback-lname">Last Name</label>
                  <input type="text" id="lname" name="lname" placeholder="Your last name..." required>
              
                  <label for="fname" data-lang="feedback-email">Your E-mail</label>
                  <input type="email" id="E-mail" name="email" placeholder="Your E-mail..." required>
        
                  <label for="country" data-lang="feedback-country">Country</label>
                  <select id="country" name="country">
                    <option value="0"  data-lang="country-0" >Bulgaria</option>
                    <option value="1"  data-lang="country-1">The UK</option>
                    <option value="2"  data-lang="country-2">The USA</option>
                    <option value="3"  data-lang="country-3">Germany</option>
                    <option value="4"  data-lang="country-4">Turkey</option>
                    <option value="5"  data-lang="country-5">Serbia</option>
                    <option value="6"  data-lang="country-6">Greece</option>
                    <option value="7"  data-lang="country-7">France</option>
                    <option value="8"  data-lang="country-8">Romania</option>
                    <option value="9"  data-lang="country-9">The Netherlands</option>
                    <option value="10" data-lang="country-10">Croatia</option>
                    <option value="11" data-lang="country-11">Egypt</option>
                    <option value="12" data-lang="country-12">China</option>
                    <option value="13" data-lang="country-13">Japan</option>
                    <option value="14" data-lang="country-14">Australia</option>
                    <option value="15" data-lang="country-15">Austria</option>
                    <option value="16" data-lang="country-16">Russia</option>
                    <option value="17" data-lang="country-17">India</option>
                    <option value="18" data-lang="country-18">Brazil</option>
                    <option value="19" data-lang="country-19">South Korea</option>
                    <option value="20" data-lang="country-20">Canada</option>
        
                  </select>
              
                  <label for="subject" data-lang="feedback-message">Message</label>
                  <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px" required></textarea>
              
                  <input type="submit" data-lang="feedback-submit" value="Submit">
                </form>
              </div>
            </div>
         `,

            'bg': `<div data-lang="feedback">
            <div class="container">
                <form action="feedbackpro.php" method="POST" >
        
                  <label for="fname" data-lang="feedback-fname">Име </label>
                  <input type="text" id="fname" name="fname" placeholder="Въведете вашето име..." required>
              
                  <label for="lname" data-lang="feedback-lname">Фамилия</label>
                  <input type="text" id="lname" name="lname" placeholder="Въведете вашата фамилия..." required>
              
                  <label for="fname" data-lang="feedback-email">Електронна поща</label>
                  <input type="email" id="E-mail" name="email" placeholder="Въведете ел. поща..." required>
        
                  <label for="country" data-lang="feedback-country">Държава</label>
                  <select id="country" name="country">
                    <option value="0"  data-lang="country-0" >България</option>
                    <option value="1"  data-lang="country-1">Великобритания</option>
                    <option value="2"  data-lang="country-2">САЩ</option>
                    <option value="3"  data-lang="country-3">Германия</option>
                    <option value="4"  data-lang="country-4">Турция</option>
                    <option value="5"  data-lang="country-5">Сърбия</option>
                    <option value="6"  data-lang="country-6">Гърция</option>
                    <option value="7"  data-lang="country-7">Франция</option>
                    <option value="8"  data-lang="country-8">Румъния</option>
                    <option value="9"  data-lang="country-9">Нидерландия</option>
                    <option value="10" data-lang="country-10">Хърватска</option>
                    <option value="11" data-lang="country-11">Египет</option>
                    <option value="12" data-lang="country-12">Китай</option>
                    <option value="13" data-lang="country-13">Япония</option>
                    <option value="14" data-lang="country-14">Австралия</option>
                    <option value="15" data-lang="country-15">Австрия</option>
                    <option value="16" data-lang="country-16">Русия</option>
                    <option value="17" data-lang="country-17">Индия</option>
                    <option value="18" data-lang="country-18">Бразилия</option>
                    <option value="19" data-lang="country-19">Южна Корея</option>
                    <option value="20" data-lang="country-20">Канада</option>
        
                  </select>
              
                  <label for="subject" data-lang="feedback-message">Отзив</label>
                  <textarea id="subject" name="subject" placeholder="Напишете вашия отзив..." style="height:200px" required></textarea>
              
                  <input type="submit" data-lang="feedback-submit" value="Изпратете">
                </form>
              </div>
            </div>
         `
        },

        "send_recipe":{
            'en': `<div data-lang="send_recipe">
            <div class="container">
              <form action="process.php"method="POST">
                <label for="fname" data-lang="recipe-yname">Your Name</label>
                <input type="text" id="Your Name" name="name" placeholder="Your Name..." required>
    
                <label for="fname" data-lang="recipe-email" >Your E-mail</label>
                <input type="email" id="Your E-mail" name="email" placeholder="Your E-mail..." required>
    
                <label for="fname" data-lang="recipe-rname">Name of the recipe</label>
                <input type="text" id="Name of the recepe" name="rname" placeholder="Name of the recipe..." required>
            
                <label for="lname" data-lang="recipe-products">Products</label>
                <input type="text" id="Products" name="Ingradients" placeholder="Products..." required>
            
                <label for="subject" data-lang="recipe-prepare">How to prepare it</label>
                <textarea id="subject" name="HowToMake" placeholder="How to prepare it..." style="height:200px" required></textarea>
            
                <input type="submit" value="Submit">
              </form>
            </div>
          </div> `,

            'bg': `<div data-lang="send_recipe">
            <div class="container">
              <form action="process.php"method="POST">
                <label for="fname" data-lang="recipe-yname"> Вашето име</label>
                <input type="text" id="Your Name" name="name" placeholder="Въведете вашето име..." required>
    
                <label for="fname" data-lang="recipe-email" >Вашата електронна поща</label>
                <input type="email" id="Your E-mail" name="email" placeholder="Въведете вашата ел.поща..." required>
    
                <label for="fname" data-lang="recipe-rname">Име на рецептата</label>
                <input type="text" id="Name of the recepe" name="rname" placeholder="Въведете име на рецептата" required>
            
                <label for="lname" data-lang="recipe-products">Продукти</label>
                <input type="text" id="Products" name="Ingradients" placeholder="Въведете продуктите..." required>
            
                <label for="subject" data-lang="recipe-prepare">Начин на приготвяне</label>
                <textarea id="subject" name="HowToMake" placeholder="Въведете начин на приготвяне..." style="height:200px" required></textarea>
            
                <input type="submit" value="Изпратете">
              </form>
            </div>
          </div> `
        },

        "Search_field":{
            'en': `<div  data-lang="Search_field">

            <input type="text" name="search_text" id="search_text" style="height: 70px"  placeholder="What do you have in your fridge?" class="form-control" >
            <div id="result"></div>
            <div style="clear:both"></div>
            </div> `,

            'bg': `<div  data-lang="Search_field">

            <input type="text" name="search_text" id="search_text" style="height: 70px"  placeholder="Какво има във вашия хладилник?" class="form-control" >
            <div id="result"></div>
            <div style="clear:both"></div>
            </div> `
        },

        "mission-text":{
            'en': ` <b>Our mission is to make<br>cooking<br> easier and funnier!</b`,

            'bg': ` <b>Нашата цел е да направим<br>готвенето<br> по-лесно и по-забавно!</b`
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
