import './bootstrap';

import Alpine from 'alpinejs';
import { intersect } from '@alpinejs/intersect';
import Chart from 'chart.js/auto';


Alpine.plugin(intersect);
Alpine.start();

window.Chart = Chart;
window.Alpine = Alpine;
