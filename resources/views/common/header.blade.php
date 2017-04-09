<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="/welcome" class="navbar-brand">唤醒</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li><a href="/health">首页</a></li>
                <li><a href="/activity">活动</a></li>
                <li><a href="/expert">建议</a></li>
            </ul>
            @if (Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::getUser()->hasRole('admin'))
                        <li><a href="/admin">后台管理</a></li>
                    @endif
                    <li>
                        <a href="/message" title="您有四条新的通知">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-warning">4</span>
                        </a>
                    </li>
                    <li class="dropdown nav-user">
                        <a href="#" style="padding: 10px" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{ URL::asset('/img/avatar/'.Auth::user()->info->avatar_url) }}" class="img-circle" style="width: 30px">
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/user">我的主页</a></li>
                            <li><a href="/setting">个人设置</a></li>
                            <li class="divider"></li>
                            <li><a href="/help">帮助中心</a></li>
                            <li><a href="/feedback">建议反馈</a></li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout">登出</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/login">登录</a></li>
                    <li><a href="/auth/register">注册</a></li>
                </ul>
            @endif
        </div>
    </div>
</div>