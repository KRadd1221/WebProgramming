<div class="container">
                
                <div>
                	
            			
                        <ul class="nav nav-tabs" data-bind="foreach: categories" >
                                <li><a href="#" data-bind="text: Name, click: $root.categoryClicked" >Cat 1</a> </li>
                        </ul>
                		
                	</div>
                </div>
                
                <div data-bind="foreach: products" >
                        <div class="col-sm-3">
                                <div class="well">
                                		<img alt="item image" data-bind="attr: {src: Picture}" />
                                        <h2 data-bind="text: Name" ></h2>
                                        <p data-bind= "text: Description"></p>
                                        <ul class="nav nav-pills">
  											<li class="active"><a data-bind="attr: { href: '?action=addToCart&id=' + id} " >Add To Cart</a></li>
  											</ul>
  											<h4 data-bind="text: Price"></h4>
  											
                                        
                                </div>
                        </div>
                </div>
                
                
                
        </div>


        <script type="text/html" id="shopping-cart-template">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                <a href="#">Cart</a>
                <span class="badge"> <? $cart = $_SESSION['cart']; echo count($cart); ?> </span>
        </script>
        
        
 <? function Scripts(){ ?>
          <? global $model; ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
        <script type="text/javascript">
        $(function(){
                 $("#shopping-cart").html($("#shopping-cart-template").html())
         
                 var vm = {
                         categories: ko.observableArray(),
                         products: ko.observableArray(),
                         
                         categoryClicked: function() {
                                 $.getJSON("?action=products&format=json", { CategoryId: this.id } ,function(results){
                                         vm.products(results.model);
                                 })
                                 
                         }
                 }
                 ko.applyBindings(vm);
                 
                 $.getJSON("?action=categories&format=json",function(results){
                         vm.categories(results.model);
                 })
         });
         </script>
 <? } ?>