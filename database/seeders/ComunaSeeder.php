<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comunas')->insert([
            ['nombre_comuna'=> 'Arica','id_provincia'=> 1],
            ['nombre_comuna'=>'Camarones','id_provincia'=> 1],
            ['nombre_comuna'=>'Putre','id_provincia'=> 2],
            ['nombre_comuna'=>'General Lagos','id_provincia'=> 2],
            ['nombre_comuna'=>'Iquique','id_provincia'=> 3],
            ['nombre_comuna'=>'Alto Hospicio','id_provincia'=> 3],
            ['nombre_comuna'=>'Pozo Almonte','id_provincia'=> 4],
            ['nombre_comuna'=>'Camiña','id_provincia'=> 4],
            ['nombre_comuna'=>'Colchane','id_provincia'=> 4],
            ['nombre_comuna'=>'Huara','id_provincia'=> 4],
            ['nombre_comuna'=>'Pica','id_provincia'=> 4],
            ['nombre_comuna'=>'Antofagasta','id_provincia'=> 5],
            ['nombre_comuna'=>'Mejillones','id_provincia'=> 5],
            ['nombre_comuna'=>'Sierra Gorda','id_provincia'=> 5],
            ['nombre_comuna'=>'Taltal','id_provincia'=> 5],
            ['nombre_comuna'=>'Calama','id_provincia'=> 6],
            ['nombre_comuna'=>'Ollague','id_provincia'=> 6],
            ['nombre_comuna'=>'San Pedro De Atacama','id_provincia'=> 6],
            ['nombre_comuna'=>'Tocopilla','id_provincia'=> 7],
            ['nombre_comuna'=>'María Elena','id_provincia'=> 7],
            ['nombre_comuna'=>'Copiapó','id_provincia'=> 8],
            ['nombre_comuna'=>'Caldera','id_provincia'=> 8],
            ['nombre_comuna'=>'Tierra Amarilla','id_provincia'=> 8],
            ['nombre_comuna'=>'Chañaral','id_provincia'=> 9],
            ['nombre_comuna'=>'Diego De Almagro','id_provincia'=> 9],
            ['nombre_comuna'=>'Vallenar','id_provincia'=> 10],
            ['nombre_comuna'=>'Alto Del Carmen','id_provincia'=> 10],
            ['nombre_comuna'=>'Freirina','id_provincia'=> 10],
            ['nombre_comuna'=>'Huasco','id_provincia'=> 10],
            ['nombre_comuna'=>'La Serena','id_provincia'=> 11],
            ['nombre_comuna'=>'Coquimbo','id_provincia'=> 11],
            ['nombre_comuna'=>'Andacollo','id_provincia'=> 11],
            ['nombre_comuna'=>'La Higuera','id_provincia'=> 11],
            ['nombre_comuna'=>'Paiguano','id_provincia'=> 11],
            ['nombre_comuna'=>'Vicuña','id_provincia'=> 11],
            ['nombre_comuna'=>'Illapel','id_provincia'=> 12],
            ['nombre_comuna'=>'Canela','id_provincia'=> 12],
            ['nombre_comuna'=>'Los Vilos','id_provincia'=> 12],
            ['nombre_comuna'=>'Salamanca','id_provincia'=> 12],
            ['nombre_comuna'=>'Ovalle','id_provincia'=> 13],
            ['nombre_comuna'=>'Combarbalá','id_provincia'=> 13],
            ['nombre_comuna'=>'Monte Patria','id_provincia'=> 13],
            ['nombre_comuna'=>'Punitaqui','id_provincia'=> 13],
            ['nombre_comuna'=>'Río Hurtado','id_provincia'=> 13],
            ['nombre_comuna'=>'Valparaíso','id_provincia'=> 14],
            ['nombre_comuna'=>'Casablanca','id_provincia'=> 14],
            ['nombre_comuna'=>'Concón','id_provincia'=> 14],
            ['nombre_comuna'=>'Juan Fernández','id_provincia'=> 14],
            ['nombre_comuna'=>'Puchuncaví','id_provincia'=> 14],
            ['nombre_comuna'=>'Quintero','id_provincia'=> 14],
            ['nombre_comuna'=>'Viña Del Mar','id_provincia'=> 14],
            ['nombre_comuna'=>'Isla De Pascua','id_provincia'=> 15],
            ['nombre_comuna'=>'Los Andes','id_provincia'=> 16],
            ['nombre_comuna'=>'Calle Larga','id_provincia'=> 16],
            ['nombre_comuna'=>'Rinconada','id_provincia'=> 16],
            ['nombre_comuna'=>'San Esteban','id_provincia'=> 16],
            ['nombre_comuna'=>'La Ligua','id_provincia'=> 17],
            ['nombre_comuna'=>'Cabildo','id_provincia'=> 17],
            ['nombre_comuna'=>'Papudo','id_provincia'=> 17],
            ['nombre_comuna'=>'Petorca','id_provincia'=> 17],
            ['nombre_comuna'=>'Zapallar','id_provincia'=> 17],
            ['nombre_comuna'=>'Quillota','id_provincia'=> 18],
            ['nombre_comuna'=>'Calera','id_provincia'=> 18],
            ['nombre_comuna'=>'Hijuelas','id_provincia'=> 18],
            ['nombre_comuna'=>'La Cruz','id_provincia'=> 18],
            ['nombre_comuna'=>'Nogales','id_provincia'=> 18],
            ['nombre_comuna'=>'San Antonio','id_provincia'=> 19],
            ['nombre_comuna'=>'Algarrobo','id_provincia'=> 19],
            ['nombre_comuna'=>'Cartagena','id_provincia'=> 19],
            ['nombre_comuna'=>'El Quisco','id_provincia'=> 19],
            ['nombre_comuna'=>'El Tabo','id_provincia'=> 19],
            ['nombre_comuna'=>'Santo Domingo','id_provincia'=> 19],
            ['nombre_comuna'=>'San Felipe','id_provincia'=> 20],
            ['nombre_comuna'=>'Catemu','id_provincia'=> 20],
            ['nombre_comuna'=>'Llaillay','id_provincia'=> 20],
            ['nombre_comuna'=>'Panquehue','id_provincia'=> 20],
            ['nombre_comuna'=>'Putaendo','id_provincia'=> 20],
            ['nombre_comuna'=>'Santa María','id_provincia'=> 20],
            ['nombre_comuna'=>'Quilpué','id_provincia'=> 21],
            ['nombre_comuna'=>'Limache','id_provincia'=> 21],
            ['nombre_comuna'=>'Olmué','id_provincia'=> 21],
            ['nombre_comuna'=>'Villa Alemana','id_provincia'=> 21],
            ['nombre_comuna'=>'Santiago','id_provincia'=> 22],
            ['nombre_comuna'=>'Cerrillos','id_provincia'=> 22],
            ['nombre_comuna'=>'Cerro Navia','id_provincia'=> 22],
            ['nombre_comuna'=>'Conchalí','id_provincia'=> 22],
            ['nombre_comuna'=>'El Bosque','id_provincia'=> 22],
            ['nombre_comuna'=>'Estación Central','id_provincia'=> 22],
            ['nombre_comuna'=>'Huechuraba','id_provincia'=> 22],
            ['nombre_comuna'=>'Independencia','id_provincia'=> 22],
            ['nombre_comuna'=>'La Cisterna','id_provincia'=> 22],
            ['nombre_comuna'=>'La Florida','id_provincia'=> 22],
            ['nombre_comuna'=>'La Granja','id_provincia'=> 22],
            ['nombre_comuna'=>'La Pintana','id_provincia'=> 22],
            ['nombre_comuna'=>'La Reina','id_provincia'=> 22],
            ['nombre_comuna'=>'Las Condes','id_provincia'=> 22],
            ['nombre_comuna'=>'Lo Barnechea','id_provincia'=> 22],
            ['nombre_comuna'=>'Lo Espejo','id_provincia'=> 22],
            ['nombre_comuna'=>'Lo Prado','id_provincia'=> 22],
            ['nombre_comuna'=>'Macul','id_provincia'=> 22],
            ['nombre_comuna'=>'Maipú','id_provincia'=> 22],
            ['nombre_comuna'=>'Ñuñoa','id_provincia'=> 22],
            ['nombre_comuna'=>'Pedro Aguirre Cerda','id_provincia'=> 22],
            ['nombre_comuna'=>'Peñalolén','id_provincia'=> 22],
            ['nombre_comuna'=>'Providencia','id_provincia'=> 22],
            ['nombre_comuna'=>'Pudahuel','id_provincia'=> 22],
            ['nombre_comuna'=>'Quilicura','id_provincia'=> 22],
            ['nombre_comuna'=>'Quinta Normal','id_provincia'=> 22],
            ['nombre_comuna'=>'Recoleta','id_provincia'=> 22],
            ['nombre_comuna'=>'Renca','id_provincia'=> 22],
            ['nombre_comuna'=>'San Joaquín','id_provincia'=> 22],
            ['nombre_comuna'=>'San Miguel','id_provincia'=> 22],
            ['nombre_comuna'=>'San Ramón','id_provincia'=> 22],
            ['nombre_comuna'=>'Vitacura','id_provincia'=> 22],
            ['nombre_comuna'=>'Puente Alto','id_provincia'=> 23],
            ['nombre_comuna'=>'Pirque','id_provincia'=> 23],
            ['nombre_comuna'=>'San José De Maipo','id_provincia'=> 23],
            ['nombre_comuna'=>'Colina','id_provincia'=> 24],
            ['nombre_comuna'=>'Lampa','id_provincia'=> 24],
            ['nombre_comuna'=>'Tiltil','id_provincia'=> 24],
            ['nombre_comuna'=>'San Bernardo','id_provincia'=> 25],
            ['nombre_comuna'=>'Buin','id_provincia'=> 25],
            ['nombre_comuna'=>'Calera De Tango','id_provincia'=> 25],
            ['nombre_comuna'=>'Paine','id_provincia'=> 25],
            ['nombre_comuna'=>'Melipilla','id_provincia'=> 26],
            ['nombre_comuna'=>'Alhué','id_provincia'=> 26],
            ['nombre_comuna'=>'Curacaví','id_provincia'=> 26],
            ['nombre_comuna'=>'María Pinto','id_provincia'=> 26],
            ['nombre_comuna'=>'San Pedro','id_provincia'=> 26],
            ['nombre_comuna'=>'Talagante','id_provincia'=> 27],
            ['nombre_comuna'=>'El Monte','id_provincia'=> 27],
            ['nombre_comuna'=>'Isla De Maipo','id_provincia'=> 27],
            ['nombre_comuna'=>'Padre Hurtado','id_provincia'=> 27],
            ['nombre_comuna'=>'Peñaflor','id_provincia'=> 27],
            ['nombre_comuna'=>'Rancagua','id_provincia'=> 28],
            ['nombre_comuna'=>'Codegua','id_provincia'=> 28],
            ['nombre_comuna'=>'Coinco','id_provincia'=> 28],
            ['nombre_comuna'=>'Coltauco','id_provincia'=> 28],
            ['nombre_comuna'=>'Doñihue','id_provincia'=> 28],
            ['nombre_comuna'=>'Graneros','id_provincia'=> 28],
            ['nombre_comuna'=>'Las Cabras','id_provincia'=> 28],
            ['nombre_comuna'=>'Machali','id_provincia'=> 28],
            ['nombre_comuna'=>'Malloa','id_provincia'=> 28],
            ['nombre_comuna'=>'Mostazal','id_provincia'=> 28],
            ['nombre_comuna'=>'El Olivar','id_provincia'=> 28],
            ['nombre_comuna'=>'Peumo','id_provincia'=> 28],
            ['nombre_comuna'=>'Pichidegua','id_provincia'=> 28],
            ['nombre_comuna'=>'Quinta De Tilcoco','id_provincia'=> 28],
            ['nombre_comuna'=>'Rengo','id_provincia'=> 28],
            ['nombre_comuna'=>'Requinoa','id_provincia'=> 28],
            ['nombre_comuna'=>'San Vicente','id_provincia'=> 28],
            ['nombre_comuna'=>'Pichilemu','id_provincia'=> 29],
            ['nombre_comuna'=>'La Estrella','id_provincia'=> 29],
            ['nombre_comuna'=>'Litueche','id_provincia'=> 29],
            ['nombre_comuna'=>'Marchihue','id_provincia'=> 29],
            ['nombre_comuna'=>'Navidad','id_provincia'=> 29],
            ['nombre_comuna'=>'Paredones','id_provincia'=> 29],
            ['nombre_comuna'=>'San Fernando','id_provincia'=> 30],
            ['nombre_comuna'=>'Chépica','id_provincia'=> 30],
            ['nombre_comuna'=>'Chimbarongo','id_provincia'=> 30],
            ['nombre_comuna'=>'Lolol','id_provincia'=> 30],
            ['nombre_comuna'=>'Nancagua','id_provincia'=> 30],
            ['nombre_comuna'=>'Palmilla','id_provincia'=> 30],
            ['nombre_comuna'=>'Peralillo','id_provincia'=> 30],
            ['nombre_comuna'=>'Placilla','id_provincia'=> 30],
            ['nombre_comuna'=>'Pumanque','id_provincia'=> 30],
            ['nombre_comuna'=>'Santa Cruz','id_provincia'=> 30],
            ['nombre_comuna'=>'Talca','id_provincia'=> 31],
            ['nombre_comuna'=>'Constitución','id_provincia'=> 31],
            ['nombre_comuna'=>'Curepto','id_provincia'=> 31],
            ['nombre_comuna'=>'Empedrado','id_provincia'=> 31],
            ['nombre_comuna'=>'Maule','id_provincia'=> 31],
            ['nombre_comuna'=>'Pelarco','id_provincia'=> 31],
            ['nombre_comuna'=>'Pencahue','id_provincia'=> 31],
            ['nombre_comuna'=>'Río Claro','id_provincia'=> 31],
            ['nombre_comuna'=>'San Clemente','id_provincia'=> 31],
            ['nombre_comuna'=>'San Rafael','id_provincia'=> 31],
            ['nombre_comuna'=>'Cauquenes','id_provincia'=> 32],
            ['nombre_comuna'=>'Chanco','id_provincia'=> 32],
            ['nombre_comuna'=>'Pelluhue','id_provincia'=> 32],
            ['nombre_comuna'=>'Curicó','id_provincia'=> 33],
            ['nombre_comuna'=>'Hualañe','id_provincia'=> 33],
            ['nombre_comuna'=>'Licantén','id_provincia'=> 33],
            ['nombre_comuna'=>'Molina','id_provincia'=> 33],
            ['nombre_comuna'=>'Rauco','id_provincia'=> 33],
            ['nombre_comuna'=>'Romeral','id_provincia'=> 33],
            ['nombre_comuna'=>'Sagrada Familia','id_provincia'=> 33],
            ['nombre_comuna'=>'Teno','id_provincia'=> 33],
            ['nombre_comuna'=>'Vichuquén','id_provincia'=> 33],
            ['nombre_comuna'=>'Linares','id_provincia'=> 34],
            ['nombre_comuna'=>'Colbún','id_provincia'=> 34],
            ['nombre_comuna'=>'Longaví','id_provincia'=> 34],
            ['nombre_comuna'=>'Parral','id_provincia'=> 34],
            ['nombre_comuna'=>'Retiro','id_provincia'=> 34],
            ['nombre_comuna'=>'San Javier','id_provincia'=> 34],
            ['nombre_comuna'=>'Villa Alegre','id_provincia'=> 34],
            ['nombre_comuna'=>'Yerbas Buenas','id_provincia'=> 34],
            ['nombre_comuna'=>'Chillán','id_provincia'=> 35],
            ['nombre_comuna'=>'Bulnes','id_provincia'=> 35],
            ['nombre_comuna'=>'Chillán Viejo','id_provincia'=> 35],
            ['nombre_comuna'=>'El Carmen','id_provincia'=> 35],
            ['nombre_comuna'=>'Pemuco','id_provincia'=> 35],
            ['nombre_comuna'=>'Pinto','id_provincia'=> 35],
            ['nombre_comuna'=>'Quillón','id_provincia'=> 35],
            ['nombre_comuna'=>'San Ignacio','id_provincia'=> 35],
            ['nombre_comuna'=>'Yungay','id_provincia'=> 35],
            ['nombre_comuna'=>'Quirihue','id_provincia'=> 36],
            ['nombre_comuna'=>'Cobquecura','id_provincia'=> 36],
            ['nombre_comuna'=>'Coelemu','id_provincia'=> 36],
            ['nombre_comuna'=>'Ninhue','id_provincia'=> 36],
            ['nombre_comuna'=>'Portezuelo','id_provincia'=> 36],
            ['nombre_comuna'=>'Ranquil','id_provincia'=> 36],
            ['nombre_comuna'=>'Treguaco','id_provincia'=> 36],
            ['nombre_comuna'=>'San Carlos','id_provincia'=> 37],
            ['nombre_comuna'=>'Coihueco','id_provincia'=> 37],
            ['nombre_comuna'=>'Ñiquén','id_provincia'=> 37],
            ['nombre_comuna'=>'San Fabián','id_provincia'=> 37],
            ['nombre_comuna'=>'San Nicolás','id_provincia'=> 37],
            ['nombre_comuna'=>'Concepción','id_provincia'=> 38],
            ['nombre_comuna'=>'Coronel','id_provincia'=> 38],
            ['nombre_comuna'=>'Chiguayante','id_provincia'=> 38],
            ['nombre_comuna'=>'Florida','id_provincia'=> 38],
            ['nombre_comuna'=>'Hualqui','id_provincia'=> 38],
            ['nombre_comuna'=>'Lota','id_provincia'=> 38],
            ['nombre_comuna'=>'Penco','id_provincia'=> 38],
            ['nombre_comuna'=>'San Pedro de la Paz','id_provincia'=> 38],
            ['nombre_comuna'=>'Santa Juana','id_provincia'=> 38],
            ['nombre_comuna'=>'Talcahuano','id_provincia'=> 38],
            ['nombre_comuna'=>'Tomé','id_provincia'=> 38],
            ['nombre_comuna'=>'Hualpén','id_provincia'=> 38],
            ['nombre_comuna'=>'Lebu','id_provincia'=> 39],
            ['nombre_comuna'=>'Arauco','id_provincia'=> 39],
            ['nombre_comuna'=>'Cañete','id_provincia'=> 39],
            ['nombre_comuna'=>'Contulmo','id_provincia'=> 39],
            ['nombre_comuna'=>'Curanilahue','id_provincia'=> 39],
            ['nombre_comuna'=>'Los Alamos','id_provincia'=> 39],
            ['nombre_comuna'=>'Tirua','id_provincia'=> 39],
            ['nombre_comuna'=>'Los Angeles','id_provincia'=> 40],
            ['nombre_comuna'=>'Antuco','id_provincia'=> 40],
            ['nombre_comuna'=>'Cabrero','id_provincia'=> 40],
            ['nombre_comuna'=>'Laja','id_provincia'=> 40],
            ['nombre_comuna'=>'Mulchén','id_provincia'=> 40],
            ['nombre_comuna'=>'Nacimiento','id_provincia'=> 40],
            ['nombre_comuna'=>'Negrete','id_provincia'=> 40],
            ['nombre_comuna'=>'Quilaco','id_provincia'=> 40],
            ['nombre_comuna'=>'Quilleco','id_provincia'=> 40],
            ['nombre_comuna'=>'San Rosendo','id_provincia'=> 40],
            ['nombre_comuna'=>'Santa Bárbara','id_provincia'=> 40],
            ['nombre_comuna'=>'Tucapel','id_provincia'=> 40],
            ['nombre_comuna'=>'Yumbel','id_provincia'=> 40],
            ['nombre_comuna'=>'Alto Biobío','id_provincia'=> 40],
            ['nombre_comuna'=>'Temuco','id_provincia'=> 41],
            ['nombre_comuna'=>'Carahue','id_provincia'=> 41],
            ['nombre_comuna'=>'Cunco','id_provincia'=> 41],
            ['nombre_comuna'=>'Curarrehue','id_provincia'=> 41],
            ['nombre_comuna'=>'Freire','id_provincia'=> 41],
            ['nombre_comuna'=>'Galvarino','id_provincia'=> 41],
            ['nombre_comuna'=>'Gorbea','id_provincia'=> 41],
            ['nombre_comuna'=>'Lautaro','id_provincia'=> 41],
            ['nombre_comuna'=>'Loncoche','id_provincia'=> 41],
            ['nombre_comuna'=>'Melipeuco','id_provincia'=> 41],
            ['nombre_comuna'=>'Nueva Imperial','id_provincia'=> 41],
            ['nombre_comuna'=>'Padre Las Casas','id_provincia'=> 41],
            ['nombre_comuna'=>'Perquenco','id_provincia'=> 41],
            ['nombre_comuna'=>'Pitrufquén','id_provincia'=> 41],
            ['nombre_comuna'=>'Pucón','id_provincia'=> 41],
            ['nombre_comuna'=>'Saavedra','id_provincia'=> 41],
            ['nombre_comuna'=>'Teodoro Schmidt','id_provincia'=> 41],
            ['nombre_comuna'=>'Toltén','id_provincia'=> 41],
            ['nombre_comuna'=>'Vilcún','id_provincia'=> 41],
            ['nombre_comuna'=>'Villarrica','id_provincia'=> 41],
            ['nombre_comuna'=>'Cholchol','id_provincia'=> 41],
            ['nombre_comuna'=>'Angol','id_provincia'=> 42],
            ['nombre_comuna'=>'Collipulli','id_provincia'=> 42],
            ['nombre_comuna'=>'Curacautín','id_provincia'=> 42],
            ['nombre_comuna'=>'Ercilla','id_provincia'=> 42],
            ['nombre_comuna'=>'Lonquimay','id_provincia'=> 42],
            ['nombre_comuna'=>'Los Sauces','id_provincia'=> 42],
            ['nombre_comuna'=>'Lumaco','id_provincia'=> 42],
            ['nombre_comuna'=>'Puren','id_provincia'=> 42],
            ['nombre_comuna'=>'Renaico','id_provincia'=> 42],
            ['nombre_comuna'=>'Traiguén','id_provincia'=> 42],
            ['nombre_comuna'=>'Victoria','id_provincia'=> 42],
            ['nombre_comuna'=>'Valdivia','id_provincia'=> 43],
            ['nombre_comuna'=>'Corral','id_provincia'=> 43],
            ['nombre_comuna'=>'Lanco','id_provincia'=> 43],
            ['nombre_comuna'=>'Los Lagos','id_provincia'=> 43],
            ['nombre_comuna'=>'Máfil','id_provincia'=> 43],
            ['nombre_comuna'=>'Mariquina','id_provincia'=> 43],
            ['nombre_comuna'=>'Paillaco','id_provincia'=> 43],
            ['nombre_comuna'=>'Panguipulli','id_provincia'=> 43],
            ['nombre_comuna'=>'La Unión','id_provincia'=> 44],
            ['nombre_comuna'=>'Futrono','id_provincia'=> 44],
            ['nombre_comuna'=>'Lago Ranco','id_provincia'=> 44],
            ['nombre_comuna'=>'Río Bueno','id_provincia'=> 44],
            ['nombre_comuna'=>'Puerto Montt','id_provincia'=> 45],
            ['nombre_comuna'=>'Calbuco','id_provincia'=> 45],
            ['nombre_comuna'=>'Cochamó','id_provincia'=> 45],
            ['nombre_comuna'=>'Fresia','id_provincia'=> 45],
            ['nombre_comuna'=>'Frutillar','id_provincia'=> 45],
            ['nombre_comuna'=>'Los Muermos','id_provincia'=> 45],
            ['nombre_comuna'=>'Llanquihue','id_provincia'=> 45],
            ['nombre_comuna'=>'Maullín','id_provincia'=> 45],
            ['nombre_comuna'=>'Puerto Varas','id_provincia'=> 45],
            ['nombre_comuna'=>'Castro','id_provincia'=> 46],
            ['nombre_comuna'=>'Ancud','id_provincia'=> 46],
            ['nombre_comuna'=>'Chonchi','id_provincia'=> 46],
            ['nombre_comuna'=>'Curaco de Velez','id_provincia'=> 46],
            ['nombre_comuna'=>'Dalcahue','id_provincia'=> 46],
            ['nombre_comuna'=>'Puqueldón','id_provincia'=> 46],
            ['nombre_comuna'=>'Queilén','id_provincia'=> 46],
            ['nombre_comuna'=>'Quellón','id_provincia'=> 46],
            ['nombre_comuna'=>'Quemchi','id_provincia'=> 46],
            ['nombre_comuna'=>'Quinchao','id_provincia'=> 46],
            ['nombre_comuna'=>'Osorno','id_provincia'=> 47],
            ['nombre_comuna'=>'Puerto Octay','id_provincia'=> 47],
            ['nombre_comuna'=>'Purranque','id_provincia'=> 47],
            ['nombre_comuna'=>'Puyehue','id_provincia'=> 47],
            ['nombre_comuna'=>'Río Negro','id_provincia'=> 47],
            ['nombre_comuna'=>'San Juan de la Costa','id_provincia'=> 47],
            ['nombre_comuna'=>'San Pablo','id_provincia'=> 47],
            ['nombre_comuna'=>'Chaitén','id_provincia'=> 48],
            ['nombre_comuna'=>'Futaleufú','id_provincia'=> 48],
            ['nombre_comuna'=>'Hualaihue','id_provincia'=> 48],
            ['nombre_comuna'=>'Palena','id_provincia'=> 48],
            ['nombre_comuna'=>'Coihayque','id_provincia'=> 49],
            ['nombre_comuna'=>'Lago Verde','id_provincia'=> 49],
            ['nombre_comuna'=>'Aisén','id_provincia'=> 50],
            ['nombre_comuna'=>'Cisnes','id_provincia'=> 50],
            ['nombre_comuna'=>'Guaitecas','id_provincia'=> 50],
            ['nombre_comuna'=>'Cochrane','id_provincia'=> 51],
            ['nombre_comuna'=>'O\'Higgins','id_provincia'=> 51],
            ['nombre_comuna'=>'Tortel','id_provincia'=> 51],
            ['nombre_comuna'=>'Chile Chico','id_provincia'=> 52],
            ['nombre_comuna'=>'Río Ibáñez','id_provincia'=> 52],
            ['nombre_comuna'=>'Punta Arenas','id_provincia'=> 53],
            ['nombre_comuna'=>'Laguna Blanca','id_provincia'=> 53],
            ['nombre_comuna'=>'Río Verde','id_provincia'=> 53],
            ['nombre_comuna'=>'San Gregorio','id_provincia'=> 53],
            ['nombre_comuna'=>'Cabo de Hornos','id_provincia'=> 54],
            ['nombre_comuna'=>'Antártica','id_provincia'=> 54],
            ['nombre_comuna'=>'Porvenir','id_provincia'=> 55],
            ['nombre_comuna'=>'Primavera','id_provincia'=> 55],
            ['nombre_comuna'=>'Timaukel','id_provincia'=> 55],
            ['nombre_comuna'=>'Natales','id_provincia'=> 56],
            ['nombre_comuna'=>'Torres del Paine','id_provincia'=> 56]
        ]);
    }
}
