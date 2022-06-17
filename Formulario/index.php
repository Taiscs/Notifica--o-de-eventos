<!DOCTYPE html>

<head>
<div class ="container-md">
   
<html lang="pt-br">
    <head>
        <title>Notificação de ocorrência </title>
        <meta charset="utf-8">
        <link rel = 'stylesheet' href='stylesheet.css'>
        <link rel = 'stylesheet' href='bootstrap.min.css'>
        <script  src='bootstrap.min.js'></script>
        <script  src='jquery-3.6.0.js'></script>
        <script  src='javascript.js'></script>

       


    <body>

          <?php include_once ("conexao.php")?>


         <form action ="agoravai.php" method = "POST" >

         

        <div class ="container-md">

      
       


         <div class="p-1 mb-1 bg-secondary text-white"><h1>NOTIFICAÇÃO DE EVENTOS E NÃO CONFORMIDADES-CSB</h1></div>
         Unidade: <br>
            <p>

         <select class="col-md-4" type = "text" name = "dado[notifica][Unidade]" required>
                  
                    <option value="Matriz">Matriz</option>
                    <option value="Matriz">Convênios</option>
                    <option value="Mont serrat">Mont serrat</option>
                    <option value="Rio Vermelho">Rio Vermelho</option>
                     <option value="Santo Estevão">Santo Estevão</option> 

                </select>

                 
             </p>
         </div>


          <div class="col-12">



   
 <input type= "text"class="mb-3" id="datadoocorrido" name = "dado[notifica][data]" placeholder="Data do Evento"required>

        
          <input type= "text"class="mb-3"id="horadoocorrido" name = "dado[notifica][hora]" placeholder="Hora do Evento"required>

        </form>
        </div>
    </body>
</html>

    <head>
        <title></title>
        <meta charset="utf-8">
        <script  src='jquery-3.6.0.js'></script>
        <script  src='javascript.js'></script>
    </head>
    <body>

        <div class ="container">
           

            <p>

 <script >
                   $(document).ready(function(){
                     
                     $('input[id="mostrartxtouescondertxtass"]').change(function(){

                       if ($('input[id="mostrartxtouescondertxtass"]:checked').val()==="Sim"){

                           $('#notificador').show();
                         }else{

                            $('#notificador').hide();

                        }
                        });

                        });

                       

                </script>
                
                <style >
                 #notificador{
                   display: none;

                 }

            </style>


              <div id ="assinatura">

  <div class="p-0.5 mb-2 bg-secondary text-white">Você pode assinar a ocorrência ou notificar anonimamente
      
  </div>
    
 
 <input class="form-check-input" type="radio" id="mostrartxtouescondertxtass" name= "dado[notifica][assinar]"   value= Sim>Assinar<br>
<input class="form-check-input" type="radio" id ="mostrartxtouescondertxtass" name= "dado[notifica][assinar]"  value= Não> Fazer uma notificação anônima<br><br>

              <div id="notificador">


        <input type= "text"class="mb-3" id="assinatura" name= "dado[notifica][assinatura]"  placeholder="Seu nome completo" /><br>

              </div>



              </div>

          </div>

                <div class ="container">
                
    

                <script >
                   $(document).ready(function(){
                     
                     $('input[id="mostrartxtouescondertxt"]').change(function(){

                       if ($('input[id="mostrartxtouescondertxt"]:checked').val()==="Sim"){

                           $('#txtpaciente').show();
                         }else{

                            $('#txtpaciente').hide();

                        }
                        });

                        });

                       

                </script>
                
                <style >
                 #txtpaciente{
                   display: none;

                 }

            </style>

            <div id= 'pacienteafetado'>
              <div class="p-0.5 mb-2 bg-secondary text-white"> O evento afetou o Paciente?</div>

 <input class="form-check-input" type="radio" name = "dado[notifica][afetou]"  id="mostrartxtouescondertxt"value=Sim>Sim<br>
   <input class="form-check-input" type="radio" name ="dado[notifica][afetou]" id ="mostrartxtouescondertxt"value=Não> Não<br>

                <div id ='txtpaciente'>

<input type= "text"class="mb-3" id="nomepaciente" name= "dado[notifica][paciente]"  placeholder="Nome do paciente"><br>

            </div>
            </div>
               
            </p>
            <p>

</div>
           




          
            <div class="p-0.5 mb-2 bg-secondary text-white"> Setor a ser notificado:</div>
                    <select class="col-md-4" id= "setor" name= "dado[notifica][setor]" >
                    
                    <option value=''></option>
                    <option value='Administração'>Administração</option>
                    <option value='Copa'>Copa</option>
                    <option value='Enfermagem'>Enfermagem</option>
                    <option value='Farmácia'>Farmácia</option>
                    <option value='Higienização'>Higienização</option>
                    <option value='Manutenção'>Manutenção</option>
                     <option value='Nutrição'> Nutrição</option>
                    <option value='Psicologia'>Psicologia</option>
                    <option value='Portaria'>Portaria</option>
                    <option value= 'Recepção'>Recepção</option>
                    <option value='Serviço social'>Serviço social</option>
                    <option value='Suprimento'>Suprimentos</option>
                    <option value='Recepção'>Recepção</option>




                   
                     
                </select>
               <p>
               </p>

               </p>
           </div>


                 <div class ="container-md">
             
          
           <div class="p-0.5 mb-2 bg-secondary text-white"> Tipo de ocorrencia:</div>
                    <select class="col-md-4" id= "tipo" name= "dado[notifica][tipo]" >
                    
                     <option value=''></option>
                    <option value='Aspecto a ser melhorado'>Aspecto a ser melhorado</option>
                    <option value='Circustância de risco'>Circustância de risco</option>
                    <option value='Evento com dano'>Evento com dano</option>
                    <option value='Evento sem dano'>Evento sem dano</option>
                    <option value='Não conformidade'>Não conformidade</option>
                    <option value='Manutenção'>Near miss</option>
                     <option value='Nutrição'> Outro</option>

                          
                </select>



 

<p>

             
          
         <div class="p-0.5 mb-2 bg-secondary text-white"> Ocorrencia:</div>

            
               
                    <select id='select' class="col-md-4" name= "dado[notifica][ocorrencia]"  >
                    
                    <option value=''></option>
                    <option value='Assistencial'>Assistencial</option>
                    <option value='Avaria'>Avaria</option>
                    <option value='Saúde_ocupacional'>Saúde_ocupacional</option>
                    <option value='Químico'>Químico</option>
                     <option value='Físico'>Físico</option>
                     <option value='Fornecedor_Tercerizado'> Fornecedor Tercerizado</option>
                    <option value='Procedimento_Protocolo_padrão'>Procedimento_Protocolo_padrão</option>
                    <option value='Quebra_de_contrato_com_processo_fornecedor'>Quebra_de_contrato_com_processo_fornecedor</option>
                    <option value='Farmacovigilância'>Farmacovigilância</option>
                    <option value='Hemovigilância'>Hemovigilância</option>
                    <option value='Tecnovigilância'>Tecnovigilância</option>
                    <option value='Outro'>Outro</option>




                   
                     
                </select>



        

        </div>
        <script type="text/javascript" src="radios.js"></script>
    </body>
</html>

     
 
   

       
  

 <div id= 'geral'>
    

<div id= 'Assistencial'>

 <input class="form-check-input" type="radio"name="band-rock" value="Hematoma Grave"/> Hematoma Grave<br>
<input class="form-check-input" type="radio" name="band-rock" value="Hemólise"/> Hemólise<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Obstrução de cateter"/> Obstrução de cateter<br>
<input class="form-check-input" type="radio" name="band-rock" value="Perda de sangue"/> Perda de sangue<br>
<input class="form-check-input" type="radio" name="band-rock" id="Queda"value="Queda"/> Queda<br>
<input class="form-check-input" type="radio" name="band-rock"id="Troca do sistema equivocada" value="Troca do sistema equivocada"/> Troca do sistema equivocada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>

</div> 






<div id='Procedimento_Protocolo_padrão'>
 <input class="form-check-input" type="radio" name="band-rock" value="Atendimento ambulatorial"/> Atendimento ambulatorial<br>
<input class="form-check-input" type="radio" name="band-rock" value="Farmácia"/>Farmácia<br>
<input class="form-check-input" type="radio" name="band-rock" value="Faturamento"/>Faturamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Financeiro"/> Financeiro<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão administrativa"/> Gestão administrativa<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de equipamentos"/> Gestão de equipamentos<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Gestão de pessoas"/> Gestão de pessoas"<br>
<input class="form-check-input" type="radio"value="Gestão de Suprimentos"/>Gestão de Suprimentos<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Higienização"/>Higienização <br>
 <input class="form-check-input" type="radio" name="band-rock" value="Recepção"/>Recepção <br>
<input class="form-check-input" type="radio" name="band-rock" value="Faturamento"/>Faturamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Sistema de informação do paciente"/> Sistema de informação do paciente<br>
<input class="form-check-input" type="radio" name="band-rock" value="Terapia Diálitica"/>Terapia Diálitica:HD<br>
<input class="form-check-input" type="radio"name="band-rock" value="Terapia Diálitica"/>Terapia Diálitica:DP<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>

<div id= 'Quebra_de_contrato_com_processo_fornecedor'>
 <input class="form-check-input" type="radio" name="band-rock" value="Assistencia Hemoterápica"/> Assistencia Hemoterápica<br>
<input class="form-check-input" type="radio" name="band-rock" value="CME"/> CME<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Diagnóstico"/> Diagnóstico<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de equipamentos"/>Gestão de equipamentos<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de Suprimentos"/>Gestão de Suprimentos<br>
<input class="form-check-input" type="radio" name="band-rock" value="Processamento de roupas"/> Processamento de roupas<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>

</div>

<div id= 'Farmacovigilância'>
 <input class="form-check-input" type="radio" name="band-rock" value="Atraso na administração do medicamento"/>Atraso na administração do medicamento<br>

 <input class="form-check-input" type="radio" name="band-rock" id="capilar" value="capilar"/>Capilar<br>
<input class="form-check-input" type="radio" name="band-rock" value="Diluição na administração do medicamento"/> Diluição na administração do medicamento<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Dose inadequada na administração do medicamento"/> Dose inadequada na administração do medicamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Infiltração na infusão da medicação"/>Infiltração na infusão da medicação<br>
<input class="form-check-input" type="radio" name="band-rock" id ="Medicacaovencida" value = "Medicacao vencida"/>Medicamento com prazo de validade vencido<br>
<input class="form-check-input" type="radio" name="band-rock" value="Medicação administrada em via errada"/>Medicação administrada em via errada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Paciente não medicado, mas com prescrição"/> Paciente não medicado, mas com prescrição<br>
<input class="form-check-input" type="radio" name="band-rock" value="Reação adversa ao medicamento"/>Reação adversa ao medicamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Erro no aprazamento"/>Erro no aprazamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>

<div id= 'Hemovigilância'>
 <input class="form-check-input" type="radio" name="band-rock" value="Atraso na instalação"/>Atraso na instalação<br>
<input class="form-check-input" type="radio"name="band-rock" value="Atraso na retirada"/>Atraso na retirada<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Hematoma"/>Hematoma<br>
<input class="form-check-input" type="radio" name="band-rock" value="Perda de qualidade no sangue"/>Perda de qualidade no sangue<br>
<input class="form-check-input" type="radio" name="band-rock" value="Reação adversa a hemoterapia"/>Reação adversa a hemoterapia<br>
<input class="form-check-input" type="radio" name="band-rock" value="Recebimento de sangue errado"/>Recebimento de sangue errado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>




<div id= 'Tecnovigilância'>
 <input class="form-check-input" type="radio" name="band-rock" value="Defeito de fabricação"/>Defeito de fabricação<br>
<input class="form-check-input" type="radio" name="band-rock" value="Desenvolvimento impróprio/Inadequado do projeto"/>Desenvolvimento impróprio/Inadequado do projeto<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Erro do usuário quando da utilização dos produtos de saúde"/>Erro do usuário quando da utilização dos produtos de saúde<br>
<input class="form-check-input" type="radio" name="band-rock" value="Falha no produto/equipamento"/>Falha no produto/equipamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Manuseio errado"/>Manuseio errado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Rotulagem,instruções de uso e embalagem imprópria ou inadequada"/>Rotulagem,instruções de uso e embalagem imprópria ou inadequada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>






</div>

</div>
</div>

</div>
</div>
</div>

<p>
</p>
<script >
                   $(document).ready(function(){
                     
                     $('input[id="Medicacaovencida"]').change(function(){

                       if ($('input[id="Medicacaovencida"]:checked').val()==="Medicacao vencida"){

                           $('#mostrarinfomed').show();
                         }else{

                            $('#mostrarinfomed').hide();

                        }
                        });

                        });

                       

                </script>


                 <style >
                 #mostrarinfomed{
                   display: none;

                 }

            </style>

            
 <div class ="container-md">
               
               <div id ='mostrarinfomed'>
                  

     <div class="p-0.5 mb-2 bg-secondary text-white">Informações necessárias sobre o medicamento:></div>

        

        <input type= "text"class="mb-3" id="descricaomedicamento" name="dado[notifica][medicamento]" placeholder="Informe o medicamento">
        <input type= "text"class="mb-3"id="lote" name="dado[notifica][lote]"placeholder="Informe o lote">
        <input type= "text"class="mb-3"id="validade" name="dado[notifica][validade]" placeholder="Informe a validade">

               <div/>

                
   

        




 </div>
</div>
</div>
</div>







<script>

$(document).ready(function(){
                     
                     $('input[id="Troca do sistema equivocada"]').change(function(){

                       if ($('input[id="Troca do sistema equivocada"]:checked').val()==="Troca do sistema equivocada"){

                           $('#informacoescapilar').show();
                         }else{

                            $('#informacoescapilar').hide();

                        }
                        });

                        });

                       

                </script>


                 <style >
                 #informacoescapilar{
                   display: none;

                 }

            </style>

            

                   
               <div id ='informacoescapilar'>

    <div class="p-0.5 mb-2 bg-secondary text-white">Informações necessárias sobre troca do sistema:</div>


             

        <input type= "text"class="mb-7" id="pacientedialise" name = "dado[notifica][dialisado]" placeholder="Nome do paciente em diálise">
        <input type= "text"class="mb-7"id="nascimentopaciente" name = "dado[notifica][nascimentopaciente]" placeholder="Nascimento do capilar">
        <input type= "text"class="mb-7"id="capilardeorigem" name = "dado[notifica][capilardeorigem]" placeholder="Nome do capilar de origem">
        <input type= "text"class="mb-7"id="nascimentocapilar" name = "dado[notifica][nascimentocapilar]" placeholder="Nascimento do paciente">
        <input type= "text"class="mb-7"id="tempoquedialisou" name = "dado[notifica][tempoquedialisou]" placeholder=" Tempo que diálisou com outro capilar">

          </div>


     <div class ="container">
     

    <div class="p-0.5 mb-2 bg-secondary text-white">Descreva a ocorrência:> </div>

              
<div class="form-floating">

  <textarea class="container-md" name = "dado[notifica][descricao]" placeholder="Ocorrido" id="floatingTextarea2" style="height: 100px"></textarea>
<P>
</P>


<button type="submit"  class="btn btn-danger">Cadastrar</button>

</div>
</div>

</form>



