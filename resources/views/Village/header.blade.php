<div id="templatemo_header_wrapper">
	<div id="templatemo_header">

        <div id="site_title">
            <a href="#"><img src="/images/templatemo_logo.png" alt="Village Template" /></a>
        </div> <!-- end of site_title -->
        
        <div id="header_right">
            <div id="templatemo_menu">
                <ul>
                    <li><a href="{{action('UserController@index')}}" class="current">Acuille</a></li>
                    <li><a href="{{action('PersonnageController@create')}}">Crée un personage</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="news.html">News</a></li>
                </ul>   
                <div class="cleaner"></div> 	
            </div> <!-- end of templatemo_menu -->
            <div class="cleaner"></div>
			<a href="{{action('UserController@create')}}" class="rss_twitter twitter">Crée un compte</a>
            <a href="{{action('HomeController@index')}}" class="rss_twitter rss">Conection</a>
		</div>
                
        <div class="cleaner"></div>

    </div> <!-- end of templatemo_header -->
</div>