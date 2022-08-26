<?php //caso a pagina tenha somente php puro não e necessario fechar e evita o erro **headers already sent

/*
    o functions.php ele serve como um tipo de plug-in porem ele não se 
    aplica ao site como um todo e influencia todos os temas de uma vez
    o functions serve apenas para o tema que esta ativo no momento

    e a função dele é de configurações de imagens/miniatuas, funções de menus,
    varios tipos de suporte que o tema pode declarar, chamadas de scripts e 
    folhas de estilo e criação de funções especificas.
*/

    /*
        SEMPRE QUE FOR CRIAR UMA FUNÇÃO USAR O NOME DO TEMA COMO PREFIXO NO CODIGO, 
        evita que alquer função do tema se confunda com o padrão do wp ou a de algum outro tema
    */
    function wpdevs_load_scripts(){
        /*
            carrega as folhas de estipo, ele enfilera os arquivos css. o 1° argumento e o identificador, 2° chama o caminho ate o arquivo,
            3° argumento identifica de ele tem alguma dependencia com algum arquivo, verifica se tem algum css que precisa ser carregado 
            antes se existir tem informar dentro do array 4° parametro é a versão (não é obrigatorio), 5° parametro é qual tipo de midia 
            o css responde

            o FILEMTIME é passado o end do arquivo style.css onde ele sempre vai pegar a versão atualizada do css. MAS ELE É PROVISORIO 
            ATE O FIM DA CRIAÇÃO DO TEMA

            ****wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() .'/style.css') ,'all'); 
        */
        wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() .'/style.css') ,'all' ); 
        //adicionando a fonte google e é necessario somente o link pois não tem nenhum arquivo
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600&display=swap', array(), null );
        //no nome da função SCRIPT não tem S somente o gancho que tem não a função
        /*
            o 3° parametro é o da dependencia, caso usado o booststrap versão 4 que depende do jquery iriamos indicar assim array('jquery')
            e no ultimo pararemtro ele nos indica onde iniciar o javascript no header ou no footer usando true (carrega no footer) por 
            padrão ele vem no false (carrega no header). pois alguns arquivos js como o jquery precisa ser carregado no header
        */     
        wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js' , array(), '1.0', 'true' );
    
    }
    //essa ação aciona um gancho wp_enqueue_scripts que chama a função wpdevs_load_scripts
    add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');


