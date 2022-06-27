# Programacion orientada a objetos POO
    
# Objeto 
   Contiene propiedad y metodos
    ejemplo:

    
    objeto: pelota{
        Propiedades
        tamaño:
        color
        material
    } 

    acciones que se van ejecutar
    metodos{
        rodar();
        rebotar()
    }

# Sistema informatico
    propiedades:
    nombre
    edad 
    genero

    metodos
    registrarse
    login
    comprar

Clase: es una plantilla que vamos a usar para crear objetos

Ejemplo:

class Usuario{
        nombre
        edad
        email
        contraseña
    }

    metodos
    registrarse()
    iniciar sesion()
    editar perfil()

Cada vez para crear una clase debemos hacer una instancia

# Conceptos de la programacion
abstraccion: Se refiere a lo que va a hacer o como describes el objeto, a la vista o conocimientos del programador

    class usuario{
        nombre:
        edad:
        direccion
    }

    funcionalidad{
        registrarse:
        login:
        editar perfil:
        cerra session:
    }

Herencia: Se refiere a forma de poder heredar atributos ya existentes para no repetir las mismas cosas.

class empleado{                                          cliente{   
    identificaion:                                              Identificacion:
    nombre:                                                      nombre:       
    apellido:                                                    apellido: 
    edad:                                                    }
}
Modularizacion: es dividir un problema en partes indepedientes


Encapsulamiento:
Polimorfimo: La capacitdad que tiene una clase para responder a los objectos
