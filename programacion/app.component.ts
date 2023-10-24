import { Component } from '@angular/core';
@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.css']
  })
  export class AppComponent {
    title = 'PagWebDefinitivo';
    mostrar=true
    persona = [
    {nombre:"Estadio Internacional Khalifa", ubicacion:"Doha, Catar", imagen:"https://www.qatar2022.qa/book/media/ck5poako/khalifa_stadium.jpg"},
      {nombre:"Estadio Áhmad bin Ali", ubicacion:"Rayán, Catar", imagen:"https://www.qatar2022.qa/book/media/dornt4rg/ahmad_bin_ali_stadium.jpg"},
      {nombre:"Estadio Al Janoub", ubicacion:"Al-Wakrah, Catar", imagen:"https://www.qatar2022.qa/book/media/tqqjpgav/al_janoub_stadium.jpg"},
      {nombre:"Estadio Icónico Lusail", ubicacion:"Lusail, Catar", imagen:"https://www.qatar2022.qa/book/media/pi1ba5fp/lusail_stadium.jpg"},
      {nombre:"Estadio Ciudad de la Educación", ubicacion:"Rayán, Catar", imagen:"https://www.qatar2022.qa/book/media/ma5lbv1x/education_city_stadium.jpg"},
      {nombre:"Estadio 974", ubicacion:"Ras Abu Aboud, Doha, Catar", imagen:"https://www.qatar2022.qa/book/media/mqxh2swn/stadium_974.jpg"},
      {nombre:"Estadio Al Thumama", ubicacion:"Doha, Catar", imagen:"https://www.qatar2022.qa/book/media/bt2ebwn0/al_thumama_stadium.jpg"},
      {nombre:"Estadio Al Bayt", ubicacion:"Jor, Catar", imagen:"https://www.qatar2022.qa/book/media/bvubliur/al_bayt_stadium.jpg"}
    ];
  }
  