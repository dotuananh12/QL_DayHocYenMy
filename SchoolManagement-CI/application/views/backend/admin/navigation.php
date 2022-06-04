<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo ('Dashboard'); ?></span>
            </a>
        </li>

        <!-- CLASS -->
        <li class="<?php
        if ($page_name == 'Class' ||
                $page_name == 'section')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo ('Lớp học'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/classes">
                        <span><i class="entypo-dot"></i> <?php echo ('Quản lý lớp học'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section">
                        <span><i class="entypo-dot"></i> <?php echo ('Quản lý tài khoản giáo viên'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo ('Môn học'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?admin/subject/<?php echo $row['class_id']; ?>">
                            <span><?php echo ('Lớp'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/class_routine">
                <i class="entypo-calendar"></i>
                <span><?php echo ('Thời khóa biểu'); ?></span>
            </a>
        </li>

         <!-- PARENTS -->
         <li class="<?php if ($page_name == 'parent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/parent">
                <i class="entypo-user"></i>
                <span><?php echo ('Phụ huynh'); ?></span>
            </a>
        </li>

        <!-- STUDENT -->
        <li class="<?php
        if ($page_name == 'student_add' ||
		        $page_name == 'acd_session' ||
		        $page_name == 'online_admission' ||
                $page_name == 'student_bulk_add' ||
                $page_name == 'student_information' ||
                $page_name == 'student_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo ('Quản lý học sinh'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                
                 <li class="<?php if ($page_name == 'acd_session') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/acd_session">
                        <span><i class="entypo-dot"></i> <?php echo ('QL buổi học'); ?></span>
                    </a>
                </li>
                
                   
                 
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_add">
                        <span><i class="entypo-dot"></i> <?php echo ('QL nhập học'); ?></span>
                    </a>
                </li>

                <!-- STUDENT BULK ADMISSION -->
                <li class="<?php if ($page_name == 'student_bulk_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_bulk_add">
                        <span><i class="entypo-dot"></i> <?php echo ('QL nhập học (nhiều)'); ?></span>
                    </a>
                </li>

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ('Thông tin học sinh'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Lớp'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- STUDENT MARKSHEET -->
                <li class="<?php if ($page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ('Quản lý bảng điểm'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_marksheet/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Lớp'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/teacher">
                <i class="entypo-users"></i>
                <span><?php echo ('Quản lý giáo viên'); ?></span>
            </a>
        </li>


        <!-- DAILY ATTENDANCE -->
        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                <i class="entypo-chart-area"></i>
                <span><?php echo ('Điểm danh'); ?></span>
            </a>

        </li>

        <!-- EXAMS -->
        <li class="<?php
        if ($page_name == 'exam' ||
                $page_name == 'grade' ||
                $page_name == 'marks' ||
                    $page_name == 'exam_marks_sms')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo ('Quản lý thi cử'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam">
                        <span><i class="entypo-dot"></i> <?php echo ('Danh sách thi'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/grade">
                        <span><i class="entypo-dot"></i> <?php echo ('Điểm thi'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/marks">
                        <span><i class="entypo-dot"></i> <?php echo ('Quản lý nhãn hiệu'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'exam_marks_sms') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam_marks_sms">
                        <span><i class="entypo-dot"></i> <?php echo ('Gửi điểm bằng sms'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- PAYMENT -->
        <li class="<?php if ($page_name == 'invoice') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/invoice">
                <i class="entypo-credit-card"></i>
                <span><?php echo ('Quản lý đóng học'); ?></span>
            </a>
        </li>

        <!-- ACCOUNTING -->
        <li class="<?php
        if ($page_name == 'income' ||
                $page_name == 'expense' ||
                    $page_name == 'expense_category')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span><?php echo ('Ngân sách/ thu chi'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'income') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income">
                        <span><i class="entypo-dot"></i> <?php echo ('Danh sách thu'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense">
                        <span><i class="entypo-dot"></i> <?php echo ('Chi phí'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo ('Hạng mục thu tiền'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- LIBRARY -->
        <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/book">
                <i class="entypo-book"></i>
                <span><?php echo ('Quản lý thư viện'); ?></span>
            </a>
        </li>

        <!-- TRANSPORT -->
        <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/transport">
                <i class="entypo-location"></i>
                <span><?php echo ('Quản lý giao thông vận tải'); ?></span>
            </a>
        </li>

        <!-- DORMITORY -->
        <li class="<?php if ($page_name == 'dormitory') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dormitory">
                <i class="entypo-home"></i>
                <span><?php echo ('Ký túc xá'); ?></span>
            </a>
        </li>

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/noticeboard">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo ('Bảng ghi chú'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/message">
                <i class="entypo-mail"></i>
                <span><?php echo ('Thư'); ?></span>
            </a>
        </li>

        <!-- SETTINGS -->
        <li class="<?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo ('Cài đặt'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo ('Cài đặt chung'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo ('Cài đặt SMS'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php echo ('Cài đặt ngôn ngữ'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo ('Tài khoản'); ?></span>
            </a>
        </li>

    </ul>

</div>