<div class="phone_res">
    <input id="menu-cb" type="checkbox" value="off">
    <label id="menu-icon" for="menu-cb">≡</label>
    <label id="menu-background" for="menu-cb"></label>
    <div id="ham-menu">
        <ul>
            <li>
                <button class="menubtn">
                    HOME
                </button>
            </li>
            <li>
                <button class="menubtn">
                    GALLERY
                </button>
            </li>
            <li>
                <button class="menubtn">
                    SHOP
                </button>
            </li>
            <li>
                <button class="menubtn">
                    CONTACT
                </button>
            </li>
        </ul>
    </div>
</div>

<div class="pc_res">
    <div class="menu_space">
        <ul class="menu_ul">
            <li class="menu_li">
                <a href="">
                    <button class="menubtn">
                        HOME
                    </button>
                </a>
            </li>
            <li class="menu_li">
                <a href="">
                    <button class="menubtn">
                        GALLERY
                    </button>
                </a>
            </li>
            <li class="menu_li">
                <a href="">
                    <button class="menubtn">
                        SHOP
                    </button>
                </a>
            </li>
            <li class="menu_li">
                <a href="">
                    <button class="menubtn">
                        CONTACT
                    </button>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main_space">
    <table class="main_table">
        <tr class="main_tr">
            <td class="main_td_space"></td>
            <td class="main_td">
                <router-outlet></router-outlet>
            </td>
        </tr>
    </table>
</div>