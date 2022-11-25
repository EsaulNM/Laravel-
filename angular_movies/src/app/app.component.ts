import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {

  movies = [];
  title = 'angular_movies';

  constructor() {
    // localhost:8000/api/movies
    const url = 'http://127.0.0.1:8000/api/movies';

    this.getMovies(url);
  }

  async getMovies(url: string) {
    fetch(url)
    .then( response => {
      return response.json()
    })
    .then(data => {
      this.movies = data
      console.log(this.movies)
    })
  }
}
