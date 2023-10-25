<?php
require '../header.php';
?>

<title>INDEPENDENTE</title>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

        </div>
        
        <div class="payment-steps" >
           
            <div class="steps-circles-wrapper">

                <div class="step-circle"  id='filled'>  <span class="material-icons">done</span><p class="step-description" id="step-checked">Compra</p></div>
                <div class="step-circle"  id='filled'> <span class="material-icons">done</span> <p class="step-description" id="step-checked">Dados de entrega</p> </div>
                <div class="step-circle"> <span class="material-icons" id="money">attach_money</span> <p class="step-description">Pagamento</p></div>
            </div>
    
        </div>
        
        <div class="payment-main-wrapper">
    
            <div class="user-card-info-wrapper">
                
                <h2>Dados do titular do cartão</h2>
                <form class="credit-card-info">
                    <label for="card-number">Número do cartão</label>
                    <div class="credit-card-number">
                        <input type="number" name="card-number" id="card-number">
                        <span class="material-icons" id="cc">
                            credit_card
                        </span>
                    </div>

           
                
                    <div class="validity-and-sc">
                        <div class="validity">
                            <label for="card-validity">Validade</label>
                            <input type="number" name="card-validity" id="card-validity" placeholder="MM/AA">
                        </div>
                        
                     
                        <div class="security-code">
                            <label for="card-security-code">Código de segurança</label>
                            <div class="card-security-code-input-and-icon">
                                <input type="number" name="card-security-code" id="card-security-code" placeholder="CVV">
                                <span class="material-icons" id="help">
                                    help_outline
                                </span>
                            </div>
                        </div>
                   
                        
                    </div>
                    <label for="name">Nome completo</label>
                    <input type="text" name="name" id="name">

                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" id="cpf" placeholder="___-___-___-__">


                   <div class="phone-and-birthday">

                        <div class="phone">
                            <label for="card-validity">Telefone</label>
                            <input type="number" name="phone" id="phone" placeholder="(__) _____ - ____">
                        </div>

                        <div class="birthday">
                            <label for="card-validity">Data de nascimento</label>
                            <input type="number" name="phone" id="phone" placeholder="DD/MM/AAAA">
                        </div>
                   </div>

                   <label for="parcela">Parcelas</label>
                   <select id="parcela">
                        
                        <option value="0">1x de R$ 50,00 sem juros</option>
                        <option  value="1">2x de R$ 25,00 sem juros</option>
                        <option  value="2">3x de R$ 16,70 sem juros</option>
                        <option  value="3">4x de R$ 12,50 sem juros</option>
                        <option  value="4">5x de R$ 10,00 sem juros</option>
                        <option  value="5">6x de R$ 8,35 sem juros</option>

                   </select>


                </form>
                    
            </div>


            <div class="user-shop-cart-info-wrapper">


                <div class="request-card">
                    <h2>Resumo do pedido</h2>

                    <h3>Itens do pedido</h3>
                    <p id="request-itens">Death Stranding PS4 <sapn>1x</sapn></p>
                    <h3>Forma de Pagamento</h3>
                    <p id="credit-card-icon"> <span class="material-icons" id="cc-option">
                        credit_card
                    </span> Cartão de crédito</p>
                    <h3>Tempo de processamento</h3>
                    <p id="payment-process-time">1 dia útil</p>
                    <h3>Total a pagar</h3>
                    <p id="request-price">R$50,00 <sapn id="payment-portion">1x sem juros</sapn> </p>
                    <input type="button" value="Finalizar Compra" id="finish-payment">
                </div>

            </div>

        </div>



    </main>
</body>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Open Sans';
    font-weight: 400;
    background-color: #fafafa;
}
.main-wrapper{
   width: 1000px;
   margin: 4rem auto;
   border-radius: 24px;
   box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.158);
   display: block;
   background-color:#fafafa;
}

.header{
    width: 100%;
    background-color: #ff1744;
    padding: 36px 30px;
    border-radius:  24px 24px 0px 0px;
    display: flex;
    flex-direction: row;


}

.header-info{
    font-size: 14pt;
    color: #ffffff;
    cursor: pointer;
    align-items: center;
    display: flex;
    align-items: center;

}

.header-info span{
    margin-left: 10px;
    font-weight: 400;
}

#header-icon{
    font-size: 18pt;
    color: #FF0000;
    cursor: pointer;
}

.payment-main-wrapper{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 30px 40px;
    border-radius:  0px 0px 24px 24px;
    justify-content: center;
    

}

.user-card-info-wrapper{
    background-color: #ffffff;
    padding: 20px 30px;
    border-radius:  12px 0px 0px 12px;
    border-left: solid 2px #efebe9;
    border-top: solid 2px #efebe9;
    border-bottom: solid 2px #efebe9;
  
    

}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.credit-card-info{
    display: flex;
    flex-direction: column;
    width:350px;

}

.credit-card-number{
    padding:6px 12px;
    border-radius: 4px;
    width: 100%;
    outline-style: none;
    border: solid 1.8px #bdb9b7;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

#cc{
    color:#ff1744;
    font-size: 20pt;
    cursor: pointer;
}

.credit-card-number input{
    outline-style: none;
    border: none;
    background-color: transparent;
    font-size: 12pt;
    
}


#card-validity, #phone{
    padding:10px 12px;
    border-radius: 4px;
    width: 165px;
    outline-style: none;
    border: solid 1.8px #bdb9b7;
    font-size: 12pt;
}

.validity-and-sc{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
   
}

.phone-and-birthday{

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;

}

.phone, .birthday{

    display: flex;
    flex-direction: column;

}

.validity, .security-code{
    display: flex;
    flex-direction: column;

}

.card-security-code-input-and-icon{
    display: flex;
    flex-direction: row;
  
}
.card-security-code-input-and-icon{

    padding:6px 12px;
    border-radius: 4px;
    width: 165px;
    outline-style: none;
    border: solid 1.8px #bdb9b7;
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    align-items: center;


}

#card-security-code{
    width: 80px;
    font-size: 12pt;
    outline-style: none;
    border: none;
 

}

#help{
    color: #ff1744;
    font-size: 20pt;
    border-left: solid 1.9px #bdb9b7;
    padding-left: 6px;
    cursor: pointer;
    
}

label{
    font-weight: 600;
    font-size:10pt;
    margin-top: 16px;
}

#name, #cpf{
    padding:10px 12px;
    border-radius: 4px;
    width: 100%;
    outline-style: none;
    border: solid 1.8px #bdb9b7;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-size: 12pt;
}

#parcela{

    padding:10px 12px;
    border-radius: 4px;
    width: 100%;
    outline-style: none;
    border: solid 1.8px #bdb9b7;
    font-size: 12pt;
    position: relative;
    
}


h2{
    font-family: 'Open Sans';
    font-size: 16pt;
    font-weight: 600;
    margin-top: 12px;
    margin-bottom: 30px;
}

.payment-steps{
    width: 100%;
    padding:0px 20px;
    padding-top: 28px;
    padding-bottom: 46px;
    height: 100%;
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-bottom: solid 2px #efebe9;
    border-top: solid 2px #efebe9;
   
    
}
.steps-circles-wrapper{
    display: flex;
    flex-direction: row;
    background-color:#ff1744;
    position: relative;
    align-items: center;
    justify-content: space-between;
    height: 8px;
    border-radius: 12px;
    width: 720px;
    z-index: 1;
    padding: 0px 100px;
    margin: 8px 0px;
}


.step-circle{

    width: 42px;
    height: 42px;
    border: solid 3px #ff1744;
    border-radius: 100%;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ffffff;
    color:#ff1744;
    font-size: 24pt;
    font-weight: 700;
    cursor: pointer;
   
}

#filled{

   background-color:#ff1744;
   color: #ffffff;

}

.step-description{

    position: absolute;
    font-size: 12pt;
    color: #8c7b75;
    font-weight: 700;
    margin-top: 76px;
}

#step-checked{

    font-weight: 400;
}


#money{
    margin-left: 2px;
    font-size: 20pt;
}

.user-shop-cart-info-wrapper{
    background-color: #ffffff;
    padding: 20px 50px;
    border-radius:  0px 12px 12px 0px;
    border-right: solid 2px #efebe9;
    border-top: solid 2px #efebe9;
    border-bottom: solid 2px #efebe9;
    

}


.request-card{
    display: flex;
    flex-direction: column;
    width:400px;
}
.request-card p{
    margin-top: 24px;
    margin-bottom: 16px;
    font-size: 12pt;
    
}
.request-card h3{
   font-size: 11pt;
}


#finish-payment{
    border: none;
    outline-style: none;
    background-color: #FF0000;
    color: #ffffff;
    font-size: 14pt;
    font-weight: 400;
    padding: 18px 8px;
    cursor: pointer;
    border-radius: 3px;
    margin-top: 26px;

}
#request-itens{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 10px;
    border-bottom: solid 2px #efebe9;
}
#credit-card-icon{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding-bottom: 10px;
    border-bottom: solid 2px #efebe9;
}
#cc-option{
    font-size: 20pt;
    margin-right: 10px;
    color: #ff1744;
  
}

#payment-process-time{

    padding-bottom: 10px;
    border-bottom: solid 2px #efebe9;

}


#request-price{
    font-weight: 600;
    font-size: 14pt;
    display: flex;
    justify-content: space-between;
    margin-top: 24px
}

#payment-portion{

    font-size: 12pt;
    font-weight: 600;
  
}
</style>
<?php
require '../footer.php';

?>