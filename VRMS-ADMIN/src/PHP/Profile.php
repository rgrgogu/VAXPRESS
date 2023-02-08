<?php
include('./Sidebar.php');
?>

<section>
    <div class="col pt-4" id="myProfile">
        <div class="row ms-0 me-0">
            <nav aria-label="breadcrumb" class="bg-danger rounded-3 p-3 mb-4 text-white justify-content-between">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4 border border-danger shadow">
                    <div class="card-body text-center">
                        <img src="../../files/imgs/USER.png" alt="avatar" class="rounded-circle img-fluid" style="width: 250px;">
                        <h5 class="my-3"><?php echo $admin->getFullName(); ?></h5>
                        <p class="text-muted mb-4">Administrator # <?php echo $admin->getAdminID(); ?></p>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0 border border-danger shadow">
                    <div class="card-body" id="edit">
                        <form action="../PHP DATABASE/AdminEditSocmed.php" method="POST" id="edit_socmed">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu9lYExBEEQRd9FgAgQASJABkSACBABIkAEiAARIAJEgAgQAfWuuq/m5ub2jiu6amt3Znf+n/7zu7fHH0fvj/GZhmAXWAdW43JPT3HdALddm+wi2AJOgaUJWb4Ch4BkIzGO4AzYb3y/FnOPjXeukWgoWgQJ/gkchyw7wEmMBXD+KOS5j/EccA4clAw1gbJcA4JvAKb/HguWY+xwPp4Fdd6xRI63S7lqAgEXgT3gEvCAL2Knkpfh+zKz/FYMSftREuQHz4VbEkRtla6MzPYhsk13rZRZlAQtMNPWopshQUmgLMr3ASzEC/XXeVeR/VAGelt2neKz8RV3AQSqwzl1z/fWig5zfd9xZQYJ1sD51VQf+18JWhLVEkwr0cAosxxyeUaJ03nIabvBAUUt6PWsi5ls6uK60HJHdsy60LKlZHvIb9/KBjmuVai93vf+EnerM61qDTjvPRvgXYw7W4VZ5M4Es6m5wGJrNTur2GK080o2sdmlxpPade62PJMR8LoOaguquUQ2v65Qc/X/0Q+ndotktgFbiaHPdZugTeAEmOaf/Ks+8W8E39T2dhnnD3rTAAAAAElFTkSuQmCC" />
                                    <p class="mb-0"><input type="text" name="website" class="input" value="<?php echo $admin->getWebsite() ?>"></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZdJREFUSEu1lYExBVEMRe+vABWgAlSAClABKkAFqAAdUMGnAlSADuiACpgzk+zkZ7L735rZzOzs7puXe5P7kryZJrbZxPhqITiUdCBp2x5ierfnRdLDUJBDBADfSNpYkuWnpAtJj9W+PoIrSZcj5bs1ogW3iuA/4A56J+k8MmSCPUnPtuFJEmQnks5s7cPeW/ZG/3vbc2xrR1GuTICe67bx2gj4XZX0nSSLazFrMDZ9byTgUOcBhOiIvsWyrKeW2UKZkqqnCei+JMqwxSjhtyq4mAFgu0FrnMZY9KdPdnCOBGi8YoivkjjwMRYJOuxI8BvQJiGIEZDN2pjwrcpcgS+fADGDfMi0P93ZYjQXY8Wtq8C+Mv2x86D86M7cAw5EL1B5OZCyTHGiSUiTEiUqL1u6mp5wIoDJmKrjO1onT64i/n1UAESZOUjsagfLkvr6Qv9Uw871LKdjCLUaikuHnfs7CQ1DNj7UohSZoMpy8EZDLmRg+FXOToDmnE85VlquTIjIgmyiMUq47cqbzDe2ELT0Qe+eyQn+AIklVhnz1DvpAAAAAElFTkSuQmCC" />
                                    <p class="mb-0"><input type="text" name="github" class="input" value="<?php echo $admin->getGithub() ?>"></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg==" />
                                    <p class="mb-0"><input type="text" name="twitter" class="input" value="<?php echo $admin->getTwitter() ?>"></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAX1JREFUSEvNlU0yBEEQhb+5gZUtToATYGOLA4jgBm6AEwg7O5zAWFrhBDgB4QJ+LkB8olLUVJTumkXHyIiKmumuypf5MvP1iIFtNLB/ZgawCBwCK2l1JfoIuE7TPnG2lsEecJ5O3QPvtYvpvQHMAWvp/z5wkSOUAF54AHS8nZy3lMmMx8AysJoHVAKIrmMvGHmf7QLHwAewAzwDl4As/FgJ8AK41iueBTZCTc6vgU3gBngFFoC7tC/9BfCVinWQAcjxbaXYOjsDPoH5FLnPrMdv4GUGApjyUQZgtFJm2vKsmY10Wq+N7OzUADq6SvyG8/AX3Sb38W5qADNxHmrtLHVvRcb/D2BwiqIlbUE5tzU1f58AT0VLN1GkppRt6sWYgShybdp7AfoGTSmJrMqu8rkAtrSrOsn29hbgJLZIRT7wOu2VihA7I1EZzajFdO68eL9T7KKAIdcCdcl1aFbsvXId0RqJhfaiHdRlKqmBOJTKyoTN7JPZwnvTmcEz+AZJz2cZU1H38wAAAABJRU5ErkJggg==" />
                                    <p class="mb-0"><input type="text" name="instagram" class="input" value="<?php echo $admin->getInstagram() ?>"></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUxJREFUSEu1lYFNwzAQRV8nYATKBMAE7QgwAXQCYALoBLQTABMAGzAC3QA2gAlAP7Ktw7V9DlJOsiIl9r3z+ftnxsQxmzg/PYBLYAGchKGa3sN4AV5bRbYAZ8A9MHd2+QHcAILtRQ2wAa5Gtk9rBPoTJcB/ksekW+DaEnKA2vLcqPwzJLDtuANuzZpz264coH4eVgDf4ZA1x0YO0PejOMECpJaHRvVPgObEWAZ16alhI+3CAh6BiwZgDahahdfKVIwFSNvHnYC8Lfky5TrVSwv4cWRpd+ABUu4egHfb38JZ5PUN6+zimoI8wBdwkGXfRVvpOWQPUGpt8ZA9mY45gxUgVe65aeui9QJ025NBjrGKXkDTKrSrmtn1AFyzi2Io3WoPkFvJkMv74Wg30fxqgJLDJtV6EtREqUtmpgs1KKPyrmgEPQDHQdqfJwf8ArJlSRlOmzLXAAAAAElFTkSuQmCC" />
                                    <p class="mb-0"><input type="text" name="facebook" class="input" value="<?php echo $admin->getFacebook() ?>"></p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="d-flex justify-content-end ">
                                    <button type="button" name="edit_s_btn" id="edit_socmed_btn" class="btn btn-danger">Edit Social Media</button>
                                    <button type="submit" name="save_s_btn" id="save_socmed_btn" class="btn btn-danger">Save Information</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="../PHP DATABASE/AdminEditProfile.php" method="POST" id="edit_profile" class="row ms-0 me-1">
                    <div class="card mb-4 border border-danger shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Admin ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin->getAdminID() ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Given Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="given_name" class="input" value="<?php echo $admin->getGivenName() ?>" required></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Middle Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="middle_name" class="input" value="<?php echo $admin->getMiddleName() ?>"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Surname</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="surname" class="input" value="<?php echo $admin->getLastName() ?>" required></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Suffix</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="suffix" class="input" value="<?php echo $admin->getSuffix() ?>"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Sex</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <select name="sex" id="sex_select" class="input">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <input type="text" id="sex_input" class="input" value="<?php echo $admin->getSex() ?>" required>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Birthday</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="date" name="birthday" class="input" value="<?php echo $admin->getBirthday() ?>" required></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Age</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin->getAge() ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="address" class="input" value="<?php echo $admin->getAddress() ?>" required></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Contact</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="contact" class="input" value="<?php echo $admin->getContact() ?>" required></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Department</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <select name="department" id="department_select" class="input">
                                            <option value="IT">IT</option>
                                            <option value="Government">Government</option>
                                            <option value="Health">Health</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <input type="text" id="department_input" class="input" value="<?php echo $admin->getDepartment() ?>" required>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin->getEmail() ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Username</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><input type="text" name="username" class="input" value="<?php echo $admin->getUsername() ?>" required></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="input" value="<?php echo $admin->getPassword() ?>" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end mt-2">
                                    <button type="button" name="edit_btn" id="edit_btn" class="btn btn-danger">Edit Profile</button>
                                    <button type="submit" name="save_btn" id="save_btn" class="btn btn-danger">Save Information</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $("#edit_socmed_btn").on("click", function(event) {
      $("#edit_socmed input").prop("disabled", false);
      $("#save_socmed_btn").show();
      $("#edit_socmed_btn").hide();
      $("#edit_socmed input").css({
        "border-color": "#eee",
        "border-width": "2px",
        "border-style": "solid"
      });
    });

    // EDIT PROFILE
    $("#edit_btn").on("click", function(event) {
      $("#edit_profile input").prop("disabled", false);
      $("#sex_select").prop("hidden", false);
      $("#department_select").prop("hidden", false);
      $("#sex_input").hide();
      $("#department_input").hide();
      $("#save_btn").show();
      $("#edit_btn").hide();
      $("#edit_profile input").css({
        "border-color": "#eee",
        "border-width": "2px",
        "border-style": "solid"
      });
    });

    $("#save_btn").hide();
    $("#save_socmed_btn").hide();

    $("#edit_profile input").prop("disabled", true);
    $("#edit_socmed input").prop("disabled", true);

    $("#sex_select").prop("hidden", true);
    $("#department_select").prop("hidden", true);
</script>