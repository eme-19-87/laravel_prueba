<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title'  =>  'Felices Fiestas',
            'slug'  =>  'felices-fiestas',
            'extract'  =>  'IdenMac les desea felices fiestas',
            'body'  =>  '¡Felices fiestas! En esta época de alegría y reflexión, queremos expresar nuestro agradecimiento por tu apoyo continuo. Que la paz y la felicidad inunden tu hogar y tu corazón en esta temporada especial. Apreciamos cada momento que has compartido con nosotros a lo largo del año y esperamos con entusiasmo lo que el próximo año nos depara. Que las risas resuenen, los abrazos sean cálidos y los sueños se hagan realidad. Que esta temporada festiva esté llena de amor, salud y momentos inolvidables con tus seres queridos. ¡Desde nuestro equipo, te deseamos unas felices fiestas y un próspero año nuevo! ',
            'status'  =>  '2',
            'category_id'  =>  '3',
            'user_id'  =>  '1'
        ]);

        Post::create([
            'title'  =>  'Se perdio MAX',
            'slug'  =>  'se-perdio-max',
            'extract'  =>  'Ayudanos a encontrar a Max, perro cariñoso y amigable',
            'body'  =>  'Hoy recurrimos a ustedes con corazones pesados y la esperanza de encontrar a Max, nuestro perro leal y amado. Max desapareció hace unos días y estamos desesperados por su regreso seguro a casa.

            Max es un perro de raza mixta, de tamaño mediano, con un pelaje dorado y una cola esponjosa. Sus ojos marrones brillantes expresan la amabilidad que todos conocemos y amamos. Lleva un collar rojo con su nombre y nuestro número de contacto.
            
            La tarde en que Max se perdió, estábamos dando nuestro paseo diario en el parque, y de repente, se escapó persiguiendo una ardilla. Hemos buscado incansablemente en el parque y los alrededores, pero aún no hemos tenido suerte.
            
            Max es mucho más que una mascota para nosotros; es un miembro querido de la familia. Extrañamos su compañía, sus abrazos y su energía positiva. Estamos ofreciendo una recompensa generosa a cualquier persona que pueda ayudarnos a reunirnos con él.
            
            Si has visto a Max o tienes alguna información que pueda ayudarnos a encontrarlo, por favor, comunícate con nosotros. Puedes llamarnos al (tu número de teléfono) o enviar un correo electrónico a (tu dirección de correo electrónico). También hemos creado un grupo de búsqueda en las redes sociales llamado "Ayuda a Encontrar a Max", donde puedes compartir cualquier información relevante.
            
            Max es parte de nuestra vida y estamos ansiosos por su regreso. Gracias por unirte a nuestra búsqueda y por mantenernos en tus pensamientos. Tu apoyo significa el mundo para nosotros en este momento difícil. Juntos, traeremos a Max de vuelta a casa, donde pertenece.',
            'status'  =>  '2',
            'category_id'  =>  '2',
            'user_id'  =>  '1'
        ]);

        Post::create([
            'title'  =>  'Cuidado Animal y Mascotas',
            'slug'  =>  'cuidado-animal-y-mascotas',
            'extract'  =>  'Cuidado Animal y Mascotas Nuestra Responsabilidad Compartida',
            'body'  =>  'Las mascotas son más que compañeros leales; son miembros de la familia que dependen completamente de nosotros. Esta es una llamada de conciencia sobre la importancia del cuidado animal y la responsabilidad que conlleva tener una mascota.

            En primer lugar, la esterilización y la adopción son pasos fundamentales para controlar la población de animales sin hogar. Al adoptar en lugar de comprar, brindamos una segunda oportunidad a animales necesitados y reducimos el número de mascotas abandonadas.
            
            El cuidado diario es esencial. Proporcionar una dieta equilibrada, ejercicio y atención veterinaria regular garantiza que nuestras mascotas lleven vidas saludables y felices. Además, es crucial respetar las leyes de bienestar animal y denunciar el abuso o negligencia.
            
            La educación es clave para fomentar la empatía hacia los animales. Enseñemos a las generaciones futuras sobre la importancia del respeto hacia todas las formas de vida.
            
            Finalmente, consideremos adoptar un enfoque sostenible al elegir productos para nuestras mascotas y minimizar los desechos. Reduzcamos nuestra huella ecológica.
            
            Cuidar de nuestros amigos peludos no es solo un privilegio, sino también una responsabilidad compartida. Al hacerlo, no solo mejoramos sus vidas, sino también la nuestra al experimentar la gratitud, el amor y la alegría que nuestras mascotas nos brindan cada día. Juntos, podemos hacer del mundo un lugar mejor para todas las criaturas.',
            'status'  =>  '2',
            'category_id'  =>  '1',
            'user_id'  =>  '1'
        ]);

        Post::create([
            'title'  =>  'Organizamos un evento en Mayo',
            'slug'  =>  'organizamos-un-evento-en-mayo',
            'extract'  =>  'El 2 de Mayo en el hipodromo de Santa Ana',
            'body'  =>  'Estamos emocionados de anunciar un evento muy especial que marcará la diferencia en la vida de los animales en nuestra comunidad. Únete a nosotros el [fecha] en [ubicación] para nuestro evento de concientización sobre el maltrato animal, un día dedicado a dar voz a aquellos que no pueden hablar por sí mismos.

            El maltrato animal es una preocupación que nos afecta a todos. Queremos educar, inspirar y movilizar a la comunidad para tomar medidas en contra de esta injusticia. Nuestro evento contará con charlas de expertos en bienestar animal, testimonios de rescatistas, actividades interactivas y la oportunidad de conocer a animales rescatados que han encontrado amor y refugio.
            
            Juntos, podemos marcar la diferencia. Aprenderemos sobre la importancia de la adopción, la esterilización y cómo reconocer y reportar casos de maltrato animal. Habrá oportunidades para hacer donaciones y apoyar a organizaciones locales que luchan por el bienestar animal.
            
            Este evento es una oportunidad para unirnos como comunidad y trabajar hacia un futuro donde todos los animales vivan vidas felices y saludables. ¡Únete a nosotros para hacer del mundo un lugar mejor para nuestras amadas mascotas y animales en necesidad! Juntos, podemos ser la voz que necesitan desesperadamente. ¡Te esperamos con los brazos abiertos! Estamos emocionados de anunciar un evento muy especial que marcará la diferencia en la vida de los animales en nuestra comunidad. Únete a nosotros el [fecha] en [ubicación] para nuestro evento de concientización sobre el maltrato animal, un día dedicado a dar voz a aquellos que no pueden hablar por sí mismos.

            El maltrato animal es una preocupación que nos afecta a todos. Queremos educar, inspirar y movilizar a la comunidad para tomar medidas en contra de esta injusticia. Nuestro evento contará con charlas de expertos en bienestar animal, testimonios de rescatistas, actividades interactivas y la oportunidad de conocer a animales rescatados que han encontrado amor y refugio.
            
            Juntos, podemos marcar la diferencia. Aprenderemos sobre la importancia de la adopción, la esterilización y cómo reconocer y reportar casos de maltrato animal. Habrá oportunidades para hacer donaciones y apoyar a organizaciones locales que luchan por el bienestar animal.
            
            Este evento es una oportunidad para unirnos como comunidad y trabajar hacia un futuro donde todos los animales vivan vidas felices y saludables. ¡Únete a nosotros para hacer del mundo un lugar mejor para nuestras amadas mascotas y animales en necesidad! Juntos, podemos ser la voz que necesitan desesperadamente. ¡Te esperamos con los brazos abiertos!',
            'status'  =>  '2',
            'category_id'  =>  '4',
            'user_id'  =>  '1'
        ]);

        Post::create([
            'title'  =>  '10 tips de cuidado de mascotas',
            'slug'  =>  '10-tips-de-cuidado-de-mascotas',
            'extract'  =>  'Cuidar de tus mascotas es una responsabilidad que conlleva mucho amor y atención. Aquí te presentamos 10 consejos clave para asegurarte de que tus peludos amigos tengan una vida feliz y saludable.',
            'body'  =>  '
            1. Alimentación Balanceada:
            Proporciona una dieta equilibrada y adecuada a la edad y tamaño de tu mascota. Consulta con tu veterinario para obtener recomendaciones específicas.
            
            2. Ejercicio Regular:
            Mantén a tus mascotas activas con paseos diarios, sesiones de juego y ejercicio físico. Esto es esencial para su bienestar y salud.
            
            3. Visitas al Veterinario:
            Programa chequeos regulares y vacunaciones. La prevención es clave para evitar enfermedades y asegurar una vida larga.
            
            4. Higiene y Aseo:
            Baña y cepilla a tu mascota según sea necesario. Recorta sus uñas y limpia sus oídos. Un pelaje y piel saludables son señales de bienestar.
            
            5. Entrenamiento y Socialización:
            Educa a tu mascota desde temprana edad. El entrenamiento y la socialización son fundamentales para un comportamiento positivo.
            
            6. Identificación:
            Asegúrate de que tu mascota tenga una etiqueta de identificación con tu información de contacto y considera el microchip.
            
            7. Juguetes y Estimulación Mental:
            Proporciona juguetes y rompecabezas para mantener su mente activa y prevenir el aburrimiento.
            
            8. Prevención de Parásitos:
            Utiliza productos recomendados por tu veterinario para prevenir pulgas, garrapatas y otros parásitos.
            
            9. Cuidado Dental:
            El cuidado dental es esencial. Cepilla los dientes de tu mascota regularmente y considera opciones de cuidado bucal.
            
            10. Amor y Atención:
            Finalmente, el amor y la atención son cruciales. Pasar tiempo de calidad con tus mascotas fortalece vuestro vínculo y su felicidad.
            
            Recuerda que cada mascota es única, y es importante adaptar estos consejos a sus necesidades individuales. Observa y escucha a tu mascota para comprender mejor lo que le hace feliz y saludable. Además, consulta siempre a tu veterinario para obtener orientación específica sobre el cuidado de tu amigo peludo.
            
            El bienestar de tus mascotas es una prioridad, y seguir estos consejos te ayudará a asegurarte de que tengan una vida plena y feliz. ¡Comparte estos consejos con otros amantes de las mascotas y juntos promovamos el cuidado responsable de nuestros amigos peludos!',
            'status'  =>  '2',
            'category_id'  =>  '1',
            'user_id'  =>  '1'
        ]);
    }
}
