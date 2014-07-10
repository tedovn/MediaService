function progress_bar(container) {

    var bar = document.createElement('div');
    var text = document.createElement('div');

    bar.style.width = '0px';
    bar.style.height = '100%';
    bar.style.background = '#fff';

    container.appendChild(bar);
    text.style.marginTop = '5px'
    text.style.textAlign = 'center';
    text.style.color = '#fff';
    text.style.textSize = '10px';

    text.appendChild(document.createTextNode('0%'));

    container.appendChild(text);

    this.set_percentage = function (percentage) {
        bar.style.width = percentage + '%';

        text.removeChild(text.firstChild);
        text.appendChild(document.createTextNode(percentage + '%'));


    }
}