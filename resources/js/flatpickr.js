import flatpickr from 'flatpickr';

import { Japanese } from "flatpickr/dist/l10n/ja.js"


flatpickr("#calendar", {
    locale: "ja",
    minDate: "today",
    // 1年先まで入力できる
    maxDate: new Date().fp_incr(30),
    minuteIncrement:30
});