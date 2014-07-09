/**
 * Created by Yavor Home on 1.7.2014 г..
 */
window.onload = function () {

    var bar = new progress_bar(document.getElementById('progress_bar_wrap'));


    document.getElementById('from_0_to_100').onclick = function () {
        var i = 0;

        var interval = window.setInterval(function () {
            if (i >= 100) {
                window.clearInterval(interval);
            }
            bar.set_percentage(i++);
        }, 20);
    }
}
