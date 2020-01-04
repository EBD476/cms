<footer class="footer" data-background-color="black">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="http://hantaibms.com/">
                        {{__('HANTAIBMS')}}
                    </a>
                </li>
                <li>
                    <a href="#">
                       {{__('About Us')}}
                    </a>
                </li>
                <li>
                    <a href="#">
                        {{__('Blog')}}
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>
            <a href="https://www.hantaibms.com" target="_blank">{{__('PED')}}</a>&nbsp;{{__('Designed by')}}
        </div>
    </div>
</footer>