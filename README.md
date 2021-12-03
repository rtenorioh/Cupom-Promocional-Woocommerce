# Cupom-Promocional-Woocommerce
Cupom Promocional de leve 3 pague 2 para Woocommerce

1° Crie um cupom no WooCommerce, selecione "Desconto fixo de carrinho" em "Tipo de desconto" e deixe "Valor do cupom" com 0.

2° Na descrição do cupom, coloque o texto que deseja que apreceça na página de carrinho e ckeckout. Exemplo: Promoção: Pague 2 e leve 3.

3° Os outros dados do cupom você pode configurar da forma que desejar.

4° Copie o código disponível no arquivo code.php deste repositório e cole dentro do arquivo functions.php do seu tema ativo.

a. Altere a variável $ItQuantidadeMinima
- Define a quatidade mínima de produto carrinho necessário para a promoção. Se for do tipo "pague 3 e leve 4", a quantidade mínima de produtos será 4.

b. Altere a variável $StNomeCupom
- Preencha com o nome do cupom que você criou.
