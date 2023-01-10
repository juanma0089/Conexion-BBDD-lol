DROP DATABASE IF EXISTS lol;
CREATE DATABASE lol CHARACTER SET utf8mb4;
USE lol;
CREATE TABLE `champ` (
`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(100) NOT NULL,
`rol` ENUM("Asesino", "Luchador", "Mago", "Tirador", "Apoyo", "Tanque") ,
`difficulty` ENUM("Baja", "Moderada", "Alta"),
`description` VARCHAR(512)
);

INSERT INTO `champ`(`name`, `rol`, `difficulty`, `description`) VALUES
("Fiora", "Luchador", "Baja", "Fiora, la duelista más temida de Valoran, ha alcanzado renombre por su estilo brusco y su mente astuta, así como por la velocidad de su estoque. Fiora nació en el seno de la Casa Laurent, en el reino de Demacia, y asumió el control de la familia a raíz de un escándalo que casi acaba con ellos. La reputación de la Casa Laurent se hundió, pero Fiora empeñó todos sus esfuerzos en restablecer el honor de su familia y devolverla al lugar que le correspondía entre las mejores de Demacia"),
("Ekko", "Asesino", "Alta", "Ekko, un prodigio surgido de las implacables calles de Zaun, manipula el tiempo para sacar ventaja de todas las situaciones. Con una máquina de su invención llamada Dispositivo Z, explora las distintas posibilidades de la realidad hasta alcanzar el momento ideal. Aunque adora su libertad, si algo amenaza a sus amigos, hará lo que sea para defenderlos. Para quien no sepa quién es este muchacho, Ekko parece conseguir lo imposible a la primera, una y otra vez."),
("Brand", "Mago", "Moderada", "Brand, antiguo miembro de la tribu Kegan Rodhe del helado Freljord, es una lección sobre la tentación de un poder mayor. En busca de una de las legendarias Runas Geogénicas, Kegan traicionó a sus compañeros y se quedó con la runa. El hombre desapareció al instante. Su alma se consumió y su cuerpo pasó a ser un recipiente de llamas vivas. Ahora, Brand recorre Valoran en busca de otras Runas Geogénicas, jurando vengarse por las calamidades que posiblemente jamás habría podido sufrir en una docena de vidas mortales."),
("Ashe", "Tirador", "Moderada", "Ashe, comandante hija del hielo de la tribu de Avarosa, lidera las hordas más numerosas del norte. Impasible, inteligente e idealista, aunque incómoda en su papel de líder, utiliza los poderes mágicos ancestrales de su linaje para empuñar un arco de Hielo Puro. Su gente cree que Ashe es la heroína mitológica Avarosa reencarnada, y ella espera unificar Freljord una vez más al recuperar sus antiguas tierras tribales."),
("Braum", "Apoyo", "Baja", "Bendecido con bíceps enormes y un corazón aún más grande, Braum es un héroe muy apreciado en Freljord. Todas las tabernas al norte del Fuerte Helado brindan por su fuerza legendaria. Se dice que taló un bosque de robles en una sola noche y convirtió una montaña entera en escombros. Cargando una puerta acorazada encantada a sus espaldas como escudo, Braum recorre el gélido norte luciendo una sonrisa bigotuda tan grande como sus músculos: un verdadero amigo para todos los necesitados.")
;
