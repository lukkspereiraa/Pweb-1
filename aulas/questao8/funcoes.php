<?php
/**
 * Renderiza um arquivo de template, passando um array de dados para ele.
 * As chaves do array se tornam variáveis disponíveis dentro do template.
 *
 * @param string $template_path O caminho para o arquivo de template.
 * @param array $data Os dados a serem passados para o template.
 */
function render_template($template_path, $data = []) {
    if (file_exists($template_path)) {
        extract($data);
        require $template_path;
    } else {
        echo "<p style='color: red; font-weight: bold;'>Erro: Template não encontrado em '$template_path'</p>";
    }
}
?>