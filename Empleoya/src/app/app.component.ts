import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Empleoya';
}

export class Candidato{
  constructor(
    public nombre: string,
    public identificacion: number,
    public profesion: string,
    public edad: number,
    public telefono: number,
    public correo: string,
    public perfil: string,
    public aspiracion: number,
    public experiencia: string,
    public nivel: string,
    public referencias: string,
    public id?: number,
  ){}
}
