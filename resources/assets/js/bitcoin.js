const bitcoinApiUrl = '/bitcoin/fetch';

fetch(bitcoinApiUrl)
    .then( resp => resp.json() )
    .then( data => {

        // US
        let price_usd_element = document.getElementById('price_usd'),
        price_usd_class = data.price_usd > 0 ? 'm--font-accent' : 'm--font-danger';
        price_usd_element.innerHTML = parseFloat(data.price_usd).toFixed(2);
        price_usd_element.classList.add(price_usd_class);

        // EUR
        let price_eur_element = document.getElementById('price_eur'),
            price_eur_class = data.price_eur > 0 ? 'm--font-accent' : 'm--font-danger';
        price_eur_element.innerHTML = parseFloat(data.price_eur).toFixed(2);
        price_eur_element.classList.add(price_eur_class);

        // AUD
        let price_aud_element = document.getElementById('price_aud'),
            price_aud_class = data.price_aud > 0 ? 'm--font-accent' : 'm--font-danger';
        price_aud_element.innerHTML = parseFloat(data.price_aud).toFixed(2);
        price_aud_element.classList.add(price_aud_class);

        let percent_change_1h = document.getElementById('percent_change_1h'),
            percent_change_1h_class = data.percent_change_1h > 0 ? 'm--font-accent' : 'm--font-danger';
        percent_change_1h.innerHTML = parseFloat(data.percent_change_1h).toFixed(2);
        percent_change_1h.classList.add(percent_change_1h_class);

        let percent_change_24h = document.getElementById('percent_change_24h'),
            percent_change_24h_class = data.percent_change_24h > 0 ? 'm--font-accent' : 'm--font-danger';
        percent_change_24h.innerHTML = parseFloat(data.percent_change_24h).toFixed(2);
        percent_change_24h.classList.add(percent_change_24h_class);

        let percent_change_7d = document.getElementById('percent_change_7d'),
            percent_change_7d_class = data.percent_change_7d > 0 ? 'm--font-accent' : 'm--font-danger';
        percent_change_7d.innerHTML = parseFloat(data.percent_change_7d).toFixed(2);
        percent_change_7d.classList.add(percent_change_7d_class);

        let percent_change = (parseFloat(data.price_usd) - parseFloat(data.last_price_usd)) / parseFloat(data.last_price_usd) * 100,
            percent_change_last = document.getElementById('percent_change_last'),
            percent_change_last_class = percent_change > 0 ? 'm--font-accent' : 'm--font-danger';
        percent_change_last.innerHTML = percent_change.toFixed(2);
        percent_change_last.classList.add(percent_change_last_class);
});
