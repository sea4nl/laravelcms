<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="/css/app.css" />
        <title>Admin Menu</title>

        <link
    </head>
    <body>
        <div class="app" id="app">
            <div class="Sidebar">
                <div class="Sidebar__menu">
                    <ul class="Sidebar__list">
                        <a v-link="{path: '/home'}"><li class="Sidebar__item">Home</li></a>
                        <a v-link="{path: '/dashboard'}"><li class="Sidebar__item">Dashboard</li></a>
                        <a v-link="{path: '/page'}"><li class="Sidebar__item">Pages</li></a>
                        <a v-link="{path: '/user'}"><li class="Sidebar__item">Users</li></a>
                    </ul>
                </div>
            </div>
            <div class="Content">
                <router-view></router-view>
            </div>

        </div>
        <script src="/js/main.js"></script>
    </body>
</html>
