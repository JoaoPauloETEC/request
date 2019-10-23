
<?php
    try {
        $conexao = mysqli_connect('sql208.unaux.com','unaux_24573504','request','unaux_24573504_requerimento');
                                //servidor , usuario banco, senha, nome do banco
    
        $tipo = $_GET['tipo'];
        $id = $_SESSION['codigoAluno'];
        
        $query = "SELECT nm_assunto_requerimento, dt_envio, ds_requerimento
        FROM tb_tipo_requerimento t
        INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
        INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
        ";
        
        
        $resultado = mysqli_query($conexao,$query);
       
       
        
        while($linha = mysqli_fetch_assoc($resultado)){
             
            $registro = array(
                'requerimento'=>array(
                    'assunto' => $linha['nm_assunto_requerimento'],
                    'envio' => $linha['dt_envio'],
                    'desc' => $linha['ds_requerimento'],
                )
            );
        
            
        }
       
        echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }
?>