$(document).ready(() => {
    let defaultPage = 'login';
    
    let loadPage = () => {
        let hash = window.location.hash;
        let page = hash.slice(1);
        loadContent(page);
    }

    let loadContent = (page) => {
        let split    = page.split('?');
        let pageName = split[0] || defaultPage;
        let params   = split[1];
        let urlPage  = `pages/${pageName}.php${params ? '?' + params : ''}`;

        $.ajax({
            url: urlPage,
            type: 'GET',
            data: getParams(params),
            success: function(data) {
                let { title, template, html } = data;
                let contentPage = html.replace(/[\r\n]+/g, '');

                $.get(`templates/${template}.php`, { content: contentPage })
                .done(function(contentHtml) {
                    $('#content').html(contentHtml.replace(/[\r\n]+/g, ''));
                    document.title = title;
                })
                .fail(function(xhr, status, error) {
                    $('#content').html('Error loading content: ' + error);
                });
            },
            error: function(xhr, status, error) {
                $('#content').html('Error loading content: ' + error);
            }
        });
    }

    let getParams = (params) => {
        const sparams = new URLSearchParams(params);
        const obj = {};
        
        for (const [key, value] of sparams.entries()) {
            if (value === '') {
                obj[key] = '';
            } else {
                const numberValue = Number(value);
                obj[key] = isNaN(numberValue) ? value : numberValue;
            }
        }
        return obj;
    }

    loadPage();

    $(window).on('hashchange', () => {
        loadPage();
    });
})

let alertMessage = (text, type) => {
    alert(text);
}

let redirectTo = (page) => {
    window.location.hash = page;
}       