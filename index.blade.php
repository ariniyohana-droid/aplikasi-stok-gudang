<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Stok & Gudang</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
<style>
/* =====================================================================
   CORPORATE BLUE — ENTERPRISE DESIGN SYSTEM
   ===================================================================== */
:root{
    --primary:        #2563EB;
    --primary-dark:   #1E3A8A;
    --primary-light:  #93C5FD;
    --primary-50:     #EFF6FF;
    --primary-100:    #DBEAFE;
    --bg:             #F8FAFC;
    --surface:        #FFFFFF;
    --border:         #E2E8F0;
    --text:           #1E293B;
    --text-muted:     #64748B;
    --text-soft:      #94A3B8;
    --success:        #16A34A;
    --success-bg:     #ECFDF5;
    --warning:        #D97706;
    --warning-bg:     #FFFBEB;
    --danger:         #DC2626;
    --danger-bg:      #FEF2F2;
    --radius-sm:      8px;
    --radius:         12px;
    --radius-lg:      18px;
    --shadow-sm:      0 1px 2px rgba(15,23,42,0.06);
    --shadow:         0 4px 14px rgba(15,23,42,0.07);
    --shadow-lg:      0 16px 40px rgba(15,23,42,0.12);
    --sidebar-w:      264px;
    --topbar-h:       64px;
    --font-ui:        'Inter', sans-serif;
    --font-mono:      'JetBrains Mono', monospace;
}

/* Dark mode palette */
html[data-theme="dark"]{
    --bg:             #0B1220;
    --surface:        #111A2C;
    --border:         #1F2B42;
    --text:           #E5EDFB;
    --text-muted:     #92A3BE;
    --text-soft:      #64748B;
    --primary-50:     rgba(37,99,235,0.12);
    --primary-100:    rgba(37,99,235,0.2);
    --success-bg:     rgba(22,163,74,0.12);
    --warning-bg:     rgba(217,119,6,0.12);
    --danger-bg:      rgba(220,38,38,0.12);
    --shadow:         0 4px 18px rgba(0,0,0,0.35);
    --shadow-lg:      0 20px 50px rgba(0,0,0,0.5);
}

*{ box-sizing:border-box; }
html,body{ height:100%; }
body{
    background:var(--bg);
    font-family:var(--font-ui);
    color:var(--text);
    transition:background .25s ease, color .25s ease;
    -webkit-font-smoothing:antialiased;
}
::selection{ background:var(--primary-light); color:var(--primary-dark); }
a{ text-decoration:none; }

/* =====================================================================
   LOGIN SCREEN
   ===================================================================== */
#loginScreen{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:
        radial-gradient(circle at 15% 20%, rgba(147,197,253,0.35), transparent 45%),
        radial-gradient(circle at 85% 80%, rgba(37,99,235,0.25), transparent 45%),
        linear-gradient(160deg, var(--primary-dark) 0%, #142a63 45%, var(--primary) 100%);
    padding:20px;
    position:relative;
    overflow:hidden;
}
#loginScreen::before{
    content:'';
    position:absolute; inset:0;
    background-image: linear-gradient(rgba(255,255,255,0.045) 1px, transparent 1px),
                       linear-gradient(90deg, rgba(255,255,255,0.045) 1px, transparent 1px);
    background-size:42px 42px;
    pointer-events:none;
}
.login-card{
    position:relative;
    z-index:1;
    width:100%;
    max-width:420px;
    background:var(--surface);
    border-radius:var(--radius-lg);
    box-shadow:var(--shadow-lg);
    padding:38px 36px 30px;
    animation:loginPop .5s cubic-bezier(.2,.8,.2,1);
}
@keyframes loginPop{ from{opacity:0; transform:translateY(18px) scale(.98);} to{opacity:1; transform:none;} }
.login-brand{ display:flex; align-items:center; gap:12px; margin-bottom:26px; }
.login-brand .logo-icon{
    width:50px; height:50px; border-radius:12px;
    background:linear-gradient(135deg, var(--primary), var(--primary-dark));
    display:flex; align-items:center; justify-content:center;
    color:#fff; font-size:22px; box-shadow:0 6px 16px rgba(37,99,235,0.35);
}
.login-brand strong{ display:block; font-size:14.5px; font-weight:700; color:var(--text); }
.login-brand span{ font-size:11.5px; color:var(--text-muted); letter-spacing:.4px; }
.login-title{ font-size:22px; font-weight:800; margin-bottom:4px; }
.login-sub{ font-size:13.5px; color:var(--text-muted); margin-bottom:26px; }
.login-field{ margin-bottom:16px; }
.login-field label{ font-size:13px; font-weight:600; color:var(--text); margin-bottom:6px; display:block; }
.login-input-group{ position:relative; }
.login-input-group i.field-icon{
    position:absolute; left:14px; top:50%; transform:translateY(-50%);
    color:var(--text-soft); font-size:14px;
}
.login-input-group input{
    width:100%; padding:11px 44px 11px 40px;
    border:1.5px solid var(--border); border-radius:var(--radius-sm);
    background:var(--bg); color:var(--text); font-size:14px;
    transition:.15s;
}
.login-input-group input:focus{
    outline:none; border-color:var(--primary); background:var(--surface);
    box-shadow:0 0 0 4px var(--primary-50);
}
.login-input-group .toggle-eye{
    position:absolute; right:12px; top:50%; transform:translateY(-50%);
    color:var(--text-soft); cursor:pointer; font-size:14px; padding:4px;
}
.login-input-group .toggle-eye:hover{ color:var(--primary); }
.field-error{ color:var(--danger); font-size:12px; margin-top:5px; display:none; }
.field-error.show{ display:block; }
.login-input-group input.is-invalid{ border-color:var(--danger); }
.login-options{ display:flex; align-items:center; justify-content:space-between; margin:4px 0 22px; }
.remember-check{ display:flex; align-items:center; gap:8px; font-size:13px; color:var(--text-muted); cursor:pointer; user-select:none; }
.remember-check input{ width:16px; height:16px; accent-color:var(--primary); cursor:pointer; }
.btn-login{
    width:100%; padding:12px; border:none; border-radius:var(--radius-sm);
    background:linear-gradient(135deg, var(--primary), var(--primary-dark));
    color:#fff; font-weight:700; font-size:14.5px; letter-spacing:.2px;
    box-shadow:0 8px 20px rgba(37,99,235,0.3);
    display:flex; align-items:center; justify-content:center; gap:8px;
    transition:.15s;
}
.btn-login:hover{ transform:translateY(-1px); box-shadow:0 10px 26px rgba(37,99,235,0.4); }
.btn-login:active{ transform:translateY(0); }
.login-alert{
    display:none; align-items:center; gap:8px; background:var(--danger-bg); color:var(--danger);
    border:1px solid rgba(220,38,38,0.25); padding:10px 14px; border-radius:var(--radius-sm);
    font-size:13px; margin-bottom:16px;
}
.login-alert.show{ display:flex; }
.login-hint{ text-align:center; font-size:12px; color:var(--text-soft); margin-top:22px; line-height:1.6; }
.login-hint b{ color:var(--text-muted); font-family:var(--font-mono); }

/* =====================================================================
   APP SHELL / SIDEBAR
   ===================================================================== */
#appShell{ display:none; }
.sidebar{
    position:fixed; width:var(--sidebar-w); height:100vh;
    background:var(--surface);
    color:var(--text);
    overflow-y:auto; overflow-x:hidden;
    border-right:1px solid var(--border);
    z-index:1030;
    transition:transform .25s ease, background .25s ease;
}
.sidebar-logo{
    padding:20px 20px 18px; display:flex; align-items:center; gap:12px;
    border-bottom:1px solid var(--border);
}
.sidebar-logo .logo-icon{
    width:44px; height:44px; border-radius:11px; flex-shrink:0;
    background:linear-gradient(135deg, var(--primary), var(--primary-dark));
    display:flex; align-items:center; justify-content:center;
    font-size:19px; color:#fff; box-shadow:0 4px 12px rgba(37,99,235,0.3);
}
.sidebar-logo .logo-text strong{ display:block; font-size:12.5px; font-weight:700; color:var(--text); line-height:1.3; }
.sidebar-logo .logo-text span{ font-size:10px; color:var(--primary); letter-spacing:.6px; font-weight:600; }

.menu-section{
    font-size:10.5px; font-weight:700; letter-spacing:1.2px;
    color:var(--text-soft); padding:18px 22px 6px; text-transform:uppercase;
}
.menu{ padding:6px 12px 24px; }
.menu a{
    display:flex; align-items:center; gap:11px;
    color:var(--text-muted); padding:10px 14px; border-radius:var(--radius-sm);
    margin-bottom:2px; cursor:pointer; font-size:13.8px; font-weight:500;
    transition:.15s; position:relative;
}
.menu a i{ width:18px; text-align:center; font-size:14px; }
.menu a:hover{ background:var(--primary-50); color:var(--primary-dark); }
.menu a.active{
    background:linear-gradient(90deg, var(--primary-50), transparent);
    color:var(--primary); font-weight:700;
}
.menu a.active::before{
    content:''; position:absolute; left:0; top:18%; height:64%; width:3px;
    background:var(--primary); border-radius:0 4px 4px 0;
}
.menu a.logout-link{ color:var(--danger); }
.menu a.logout-link:hover{ background:var(--danger-bg); }
.sidebar::-webkit-scrollbar{ width:4px; }
.sidebar::-webkit-scrollbar-thumb{ background:var(--border); border-radius:4px; }

.sidebar-overlay{
    display:none; position:fixed; inset:0; background:rgba(15,23,42,0.5);
    z-index:1020; backdrop-filter:blur(2px);
}
.sidebar-overlay.show{ display:block; }

/* =====================================================================
   TOPBAR
   ===================================================================== */
.main{ margin-left:var(--sidebar-w); min-height:100vh; transition:margin .25s ease; }
.topbar{
    height:var(--topbar-h);
    background:var(--surface);
    display:flex; justify-content:space-between; align-items:center;
    padding:0 24px; border-bottom:1px solid var(--border);
    position:sticky; top:0; z-index:1010;
    box-shadow:var(--shadow-sm);
}
.topbar .topbar-left{ display:flex; align-items:center; gap:16px; }
.hamburger-btn{
    display:none; width:36px; height:36px; border-radius:var(--radius-sm);
    border:1px solid var(--border); background:var(--bg); align-items:center; justify-content:center;
    color:var(--text-muted); cursor:pointer; font-size:14px;
}
.breadcrumb-wrap{ display:flex; flex-direction:column; gap:2px; }
.page-title{ font-size:16px; font-weight:700; color:var(--text); }
.breadcrumb-modern{ display:flex; align-items:center; gap:6px; font-size:11.5px; color:var(--text-soft); }
.breadcrumb-modern .crumb{ color:var(--text-soft); }
.breadcrumb-modern .crumb.current{ color:var(--primary); font-weight:600; }
.breadcrumb-modern i{ font-size:8px; color:var(--text-soft); }

.topbar .topbar-right{ display:flex; align-items:center; gap:8px; }

/* Global search */
.global-search{ position:relative; }
.global-search input{
    width:260px; padding:8px 14px 8px 36px; border:1px solid var(--border);
    border-radius:20px; background:var(--bg); font-size:13px; color:var(--text);
    transition:.15s;
}
.global-search input:focus{ outline:none; border-color:var(--primary); width:300px; box-shadow:0 0 0 4px var(--primary-50); background:var(--surface); }
.global-search i.search-icon{ position:absolute; left:13px; top:50%; transform:translateY(-50%); color:var(--text-soft); font-size:12.5px; }
.search-results{
    position:absolute; top:calc(100% + 8px); left:0; width:320px;
    background:var(--surface); border:1px solid var(--border); border-radius:var(--radius);
    box-shadow:var(--shadow-lg); max-height:340px; overflow-y:auto; z-index:1050; display:none;
}
.search-results.show{ display:block; }
.search-results .sr-item{ padding:10px 14px; display:flex; gap:10px; align-items:center; cursor:pointer; border-bottom:1px solid var(--border); }
.search-results .sr-item:last-child{ border-bottom:none; }
.search-results .sr-item:hover{ background:var(--primary-50); }
.search-results .sr-icon{ width:32px; height:32px; border-radius:8px; background:var(--primary-50); color:var(--primary); display:flex; align-items:center; justify-content:center; font-size:13px; flex-shrink:0; }
.search-results .sr-title{ font-size:13px; font-weight:600; color:var(--text); }
.search-results .sr-sub{ font-size:11px; color:var(--text-muted); }
.search-results .sr-empty{ padding:18px; text-align:center; font-size:12.5px; color:var(--text-soft); }

/* Icon buttons (bell, theme) */
.icon-btn{
    width:38px; height:38px; border-radius:50%; border:1px solid var(--border);
    background:var(--bg); display:flex; align-items:center; justify-content:center;
    color:var(--text-muted); cursor:pointer; position:relative; transition:.15s; font-size:14.5px;
}
.icon-btn:hover{ background:var(--primary-50); color:var(--primary); border-color:var(--primary-light); }
.icon-btn .badge-dot{
    position:absolute; top:6px; right:7px; width:8px; height:8px; border-radius:50%;
    background:var(--danger); border:2px solid var(--surface);
}

/* Dropdown panels (notif / profile) */
.dropdown-panel{ position:relative; }
.panel-body{
    position:absolute; right:0; top:calc(100% + 10px); width:340px;
    background:var(--surface); border:1px solid var(--border); border-radius:var(--radius);
    box-shadow:var(--shadow-lg); z-index:1050; display:none; overflow:hidden;
}
.panel-body.show{ display:block; animation:panelIn .18s ease; }
@keyframes panelIn{ from{ opacity:0; transform:translateY(-6px);} to{opacity:1; transform:none;} }
.panel-head{ padding:14px 16px; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; }
.panel-head strong{ font-size:13.5px; }
.panel-head a{ font-size:11.5px; color:var(--primary); font-weight:600; }
.panel-list{ max-height:320px; overflow-y:auto; }
.notif-item{ display:flex; gap:11px; padding:12px 16px; border-bottom:1px solid var(--border); cursor:pointer; }
.notif-item:hover{ background:var(--primary-50); }
.notif-item:last-child{ border-bottom:none; }
.notif-ic{ width:34px; height:34px; border-radius:9px; display:flex; align-items:center; justify-content:center; font-size:13px; flex-shrink:0; }
.notif-ic.danger{ background:var(--danger-bg); color:var(--danger); }
.notif-ic.warning{ background:var(--warning-bg); color:var(--warning); }
.notif-ic.info{ background:var(--primary-50); color:var(--primary); }
.notif-title{ font-size:12.8px; font-weight:600; color:var(--text); }
.notif-sub{ font-size:11.3px; color:var(--text-muted); }
.notif-empty{ padding:30px 16px; text-align:center; color:var(--text-soft); font-size:12.5px; }

.profile-trigger{ display:flex; align-items:center; gap:9px; cursor:pointer; padding:5px 10px 5px 5px; border-radius:22px; border:1px solid transparent; }
.profile-trigger:hover{ background:var(--bg); border-color:var(--border); }
.profile-avatar{
    width:34px; height:34px; border-radius:50%; background:linear-gradient(135deg, var(--primary), var(--primary-dark));
    color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:13px; flex-shrink:0;
}
.profile-meta{ line-height:1.25; display:none; }
.profile-meta strong{ font-size:12.8px; display:block; color:var(--text); }
.profile-meta span{ font-size:10.8px; color:var(--text-muted); }
.profile-panel .panel-head{ align-items:flex-start; gap:12px; }
.profile-menu-item{ display:flex; align-items:center; gap:10px; padding:11px 16px; font-size:13px; color:var(--text); cursor:pointer; }
.profile-menu-item:hover{ background:var(--primary-50); color:var(--primary); }
.profile-menu-item.danger{ color:var(--danger); }
.profile-menu-item.danger:hover{ background:var(--danger-bg); }
.profile-menu-item i{ width:16px; text-align:center; }

.content{ padding:24px; }

/* =====================================================================
   CARDS / STAT CARDS
   ===================================================================== */
.card, .card-stat, .table-card{
    background:var(--surface); border:1px solid var(--border); border-radius:var(--radius);
    color:var(--text); box-shadow:var(--shadow-sm); transition:.2s ease;
}
.table-card{ padding:20px; }
.card-stat{ overflow:hidden; }
.card-stat:hover{ transform:translateY(-3px); box-shadow:var(--shadow); border-color:var(--primary-light); }
.card-stat .stat-row{ display:flex; align-items:center; gap:14px; padding:18px; }
.stat-icon{
    width:52px; height:52px; border-radius:13px; display:flex; align-items:center; justify-content:center;
    font-size:20px; color:#fff; flex-shrink:0;
}
.stat-icon.blue{ background:linear-gradient(135deg,#3B82F6,var(--primary-dark)); }
.stat-icon.green{ background:linear-gradient(135deg,#22C55E,#15803D); }
.stat-icon.orange{ background:linear-gradient(135deg,#F59E0B,#B45309); }
.stat-icon.purple{ background:linear-gradient(135deg,#8B5CF6,#5B21B6); }
.stat-body small{ color:var(--text-muted); font-size:11px; letter-spacing:.5px; text-transform:uppercase; font-weight:700; }
.stat-body h2{ font-size:26px; font-weight:800; margin:3px 0 1px; color:var(--text); font-family:var(--font-mono); }
.stat-trend{ font-size:11px; font-weight:600; }
.stat-trend.up{ color:var(--success); }
.stat-trend.down{ color:var(--danger); }

.table-card h4, .table-card h5{ color:var(--text); font-weight:700; }

/* =====================================================================
   TABLE
   ===================================================================== */
.table{ color:var(--text); --bs-table-bg:transparent; margin-bottom:0; }
.table thead th{
    background:var(--bg); color:var(--text-muted); font-size:11px; letter-spacing:.6px;
    text-transform:uppercase; border-color:var(--border); font-weight:700; padding:12px 14px;
}
.table td, .table th{ border-color:var(--border); vertical-align:middle; color:var(--text); padding:12px 14px; font-size:13.3px; }
.table tbody tr{ transition:background .12s; }
.table tbody tr:hover{ background:var(--primary-50) !important; }
.btn i, .fa, .fas, .far, .fa-solid{ color:inherit; }

/* progress bar stok */
.stock-bar-wrap{ display:flex; align-items:center; gap:8px; min-width:130px; }
.stock-bar{ flex:1; height:7px; border-radius:6px; background:var(--border); overflow:hidden; }
.stock-bar > span{ display:block; height:100%; border-radius:6px; transition:width .4s ease; }
.stock-bar.safe > span{ background:linear-gradient(90deg,#22C55E,#16A34A); }
.stock-bar.low > span{ background:linear-gradient(90deg,#FBBF24,#D97706); }
.stock-bar.critical > span{ background:linear-gradient(90deg,#F87171,#DC2626); }
.stock-bar-label{ font-size:11.5px; font-weight:700; font-family:var(--font-mono); color:var(--text-muted); min-width:26px; text-align:right; }

/* =====================================================================
   FORM
   ===================================================================== */
.form-control, .form-select{
    background:var(--surface); border:1.5px solid var(--border); color:var(--text);
    border-radius:var(--radius-sm); font-size:13.5px; padding:9px 12px;
}
.form-control:focus, .form-select:focus{
    background:var(--surface); border-color:var(--primary); box-shadow:0 0 0 4px var(--primary-50); color:var(--text);
}
.form-control::placeholder{ color:var(--text-soft); }
.form-label{ color:var(--text); font-size:12.8px; font-weight:600; margin-bottom:6px; }

/* =====================================================================
   BUTTONS
   ===================================================================== */
.btn{ border-radius:var(--radius-sm); font-size:13px; font-weight:600; transition:.15s ease; }
.btn-primary{ background:var(--primary); border:1px solid var(--primary); color:#fff; }
.btn-primary:hover{ background:var(--primary-dark); border-color:var(--primary-dark); transform:translateY(-1px); box-shadow:0 6px 14px rgba(37,99,235,0.28); }
.btn-secondary{ background:var(--bg); border:1px solid var(--border); color:var(--text-muted); }
.btn-secondary:hover{ background:var(--border); color:var(--text); }
.btn-danger{ background:var(--danger); border:1px solid var(--danger); }
.btn-danger:hover{ background:#B91C1C; transform:translateY(-1px); box-shadow:0 6px 14px rgba(220,38,38,0.28); }
.btn-success{ background:var(--success); border:1px solid var(--success); }
.btn-success:hover{ background:#15803D; transform:translateY(-1px); }
.btn-outline-secondary{ color:var(--text-muted); border-color:var(--border); }
.btn-outline-secondary:hover{ background:var(--bg); color:var(--text); border-color:var(--primary-light); }
.btn-outline-primary{ color:var(--primary); border-color:var(--primary); }
.btn-outline-primary:hover{ background:var(--primary); color:#fff; }
.btn-light{ background:var(--bg); border:1px solid var(--border); color:var(--text-muted); }
.btn-light:hover{ background:var(--border); color:var(--text); }
.btn-sm{ padding:6px 10px; font-size:12px; }
.btn:active{ transform:scale(.97); }

/* =====================================================================
   MODAL
   ===================================================================== */
.modal-content{ background:var(--surface); border:1px solid var(--border); box-shadow:var(--shadow-lg); color:var(--text); border-radius:var(--radius-lg); }
.modal-header{ border-bottom:1px solid var(--border); border-radius:var(--radius-lg) var(--radius-lg) 0 0; }
.modal-header.bg-primary{ background:linear-gradient(135deg, var(--primary), var(--primary-dark)) !important; }
.modal-header .modal-title{ color:var(--text); font-weight:700; }
.modal-header.bg-primary .modal-title{ color:#fff; }
.modal-footer{ border-top:1px solid var(--border); }
.modal-body{ color:var(--text); }
.delete-modal-icon{
    width:64px; height:64px; border-radius:50%; background:var(--danger-bg); color:var(--danger);
    display:flex; align-items:center; justify-content:center; font-size:26px; margin:6px auto 14px;
}

/* =====================================================================
   HEADINGS / BADGES / MISC
   ===================================================================== */
h2, h3, h4, h5{ color:var(--text); font-weight:800; }
.badge{ font-weight:600; letter-spacing:.2px; padding:5px 10px; border-radius:20px; font-size:10.8px; }
.badge.bg-success{ background:var(--success-bg) !important; color:var(--success) !important; }
.badge.bg-warning{ background:var(--warning-bg) !important; color:var(--warning) !important; }
.badge.bg-danger{ background:var(--danger-bg) !important; color:var(--danger) !important; }
.text-muted{ color:var(--text-muted) !important; }
.text-primary{ color:var(--primary) !important; }
.text-success{ color:var(--success) !important; }
.text-warning{ color:var(--warning) !important; }
.text-danger{ color:var(--danger) !important; }
small{ color:var(--text-muted); }
option{ background:var(--surface); color:var(--text); }
.toast{ border-radius:var(--radius-sm); box-shadow:var(--shadow-lg); border:1px solid var(--border); }

/* Empty state */
.empty-state{ text-align:center; padding:46px 20px; }
.empty-state i{ font-size:38px; color:var(--primary-light); margin-bottom:14px; }
.empty-state h6{ font-size:14px; font-weight:700; color:var(--text); margin-bottom:4px; }
.empty-state p{ font-size:12.5px; color:var(--text-muted); margin:0; }

/* Skeleton loading */
.skeleton{ background:linear-gradient(90deg, var(--border) 25%, var(--primary-50) 50%, var(--border) 75%); background-size:400% 100%; animation:skeletonShine 1.3s ease infinite; border-radius:8px; }
@keyframes skeletonShine{ 0%{background-position:100% 0;} 100%{background-position:-100% 0;} }
.sk-line{ height:14px; margin-bottom:10px; }
.sk-card{ height:96px; border-radius:var(--radius); }

/* Loading spinner overlay */
.loading-overlay{
    position:fixed; inset:0; background:rgba(248,250,252,0.7); z-index:2000;
    display:none; align-items:center; justify-content:center; backdrop-filter:blur(2px);
}
html[data-theme="dark"] .loading-overlay{ background:rgba(11,18,32,0.7); }
.loading-overlay.show{ display:flex; }
.spinner-ring{ width:46px; height:46px; border:4px solid var(--primary-100); border-top-color:var(--primary); border-radius:50%; animation:spin .7s linear infinite; }
@keyframes spin{ to{ transform:rotate(360deg); } }

/* Modern pagination */
.pagination-modern{ display:flex; align-items:center; gap:6px; justify-content:flex-end; margin-top:16px; flex-wrap:wrap; }
.pagination-modern button{
    min-width:32px; height:32px; padding:0 10px; border-radius:8px; border:1px solid var(--border);
    background:var(--surface); color:var(--text-muted); font-size:12.5px; font-weight:600; cursor:pointer;
}
.pagination-modern button:hover{ border-color:var(--primary-light); color:var(--primary); }
.pagination-modern button.active{ background:var(--primary); border-color:var(--primary); color:#fff; }
.pagination-modern button:disabled{ opacity:.4; cursor:not-allowed; }
.pagination-info{ font-size:12px; color:var(--text-muted); margin-right:auto; }

/* Recent activity timeline */
.activity-item{ display:flex; gap:12px; padding:12px 0; border-bottom:1px dashed var(--border); }
.activity-item:last-child{ border-bottom:none; }
.activity-dot{ width:34px; height:34px; border-radius:9px; display:flex; align-items:center; justify-content:center; font-size:13px; flex-shrink:0; }
.activity-dot.in{ background:var(--success-bg); color:var(--success); }
.activity-dot.out{ background:var(--warning-bg); color:var(--warning); }
.activity-title{ font-size:12.8px; font-weight:600; color:var(--text); }
.activity-sub{ font-size:11.3px; color:var(--text-muted); }
.activity-time{ font-size:10.8px; color:var(--text-soft); margin-left:auto; white-space:nowrap; }

/* Dark toggle switch */
.theme-switch{ width:38px; height:38px; border-radius:50%; border:1px solid var(--border); background:var(--bg); display:flex; align-items:center; justify-content:center; cursor:pointer; color:var(--text-muted); font-size:14px; transition:.15s; }
.theme-switch:hover{ border-color:var(--primary-light); color:var(--primary); }

/* Mobile responsiveness */
@media (max-width: 991.98px){
    .sidebar{ transform:translateX(-100%); }
    .sidebar.open{ transform:translateX(0); box-shadow:var(--shadow-lg); }
    .main{ margin-left:0; }
    .hamburger-btn{ display:flex; }
    .global-search{ display:none; }
    .profile-meta{ display:none !important; }
}
@media (min-width: 992px){
    .profile-meta{ display:block; }
}
@media (max-width: 575.98px){
    .content{ padding:14px; }
    .topbar{ padding:0 14px; }
}

/* Print styles */
@media print{
    .sidebar, .topbar, .sidebar-overlay, .no-print{ display:none !important; }
    .main{ margin-left:0 !important; }
    .content{ padding:0 !important; }
    body{ background:#fff !important; }
}
</style>
</head>
<body>

{{-- ============================================================ --}}
{{-- LOGIN SCREEN --}}
{{-- ============================================================ --}}
<div id="loginScreen">
    <div class="login-card">
        <div class="login-brand">
            <div class="logo-icon"><i class="fa-solid fa-warehouse"></i></div>
            <div>
                <strong>Sistem Informasi Stok & Gudang</strong>
                <span>PABRIK ALUMINIUM</span>
            </div>
        </div>
        <div class="login-title">Selamat Datang Kembali</div>
        <div class="login-sub">Masuk ke akun Anda untuk melanjutkan.</div>

        <div class="login-alert" id="loginAlert">
            <i class="fa-solid fa-circle-exclamation"></i>
            <span id="loginAlertMsg">Username atau password salah.</span>
        </div>

        <form onsubmit="return false" id="formLogin">
            <div class="login-field">
                <label>Username</label>
                <div class="login-input-group">
                    <i class="fa-solid fa-user field-icon"></i>
                    <input type="text" id="loginUsername" placeholder="Masukkan username" autocomplete="username">
                </div>
                <div class="field-error" id="errUsername">Username wajib diisi.</div>
            </div>
            <div class="login-field">
                <label>Password</label>
                <div class="login-input-group">
                    <i class="fa-solid fa-lock field-icon"></i>
                    <input type="password" id="loginPassword" placeholder="Masukkan password" autocomplete="current-password">
                    <i class="fa-solid fa-eye toggle-eye" id="toggleEye" onclick="togglePasswordVisibility()"></i>
                </div>
                <div class="field-error" id="errPassword">Password minimal 4 karakter.</div>
            </div>
            <div class="login-options">
                <label class="remember-check">
                    <input type="checkbox" id="rememberMe"> Ingat saya
                </label>
                <a href="#" style="font-size:12.5px;font-weight:600;" onclick="showToastLogin()">Lupa password?</a>
            </div>
            <button class="btn-login" onclick="handleLogin()">
                <i class="fa-solid fa-right-to-bracket"></i> Masuk
            </button>
        </form>
        <div class="login-hint">
            Demo akses &mdash; Username: <b>admin</b> &nbsp;|&nbsp; Password: <b>admin123</b>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- APP SHELL --}}
{{-- ============================================================ --}}
<div id="appShell">

<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeMobileSidebar()"></div>

{{-- SIDEBAR --}}
<div class="sidebar" id="mainSidebar">
    <div class="sidebar-logo">
        <div class="logo-icon"><i class="fa-solid fa-warehouse"></i></div>
        <div class="logo-text">
            <strong>SISTEM INFORMASI<br>STOK & GUDANG</strong>
            <span>PABRIK ALUMINIUM</span>
        </div>
    </div>

    <div class="menu" id="sidebarMenu">
        <div class="menu-section">Menu Utama</div>
        <a onclick="withLoading(loadDashboard)" id="menu-0"><i class="fa-solid fa-house"></i> Dashboard</a>

        <div class="menu-section">Data</div>
        <a onclick="withLoading(loadBarang)" id="menu-1"><i class="fa-solid fa-box"></i> Data Barang</a>
        <a onclick="withLoading(loadSupplier)" id="menu-2"><i class="fa-solid fa-users"></i> Supplier</a>

        <div class="menu-section">Transaksi</div>
        <a onclick="withLoading(loadBarangMasuk)" id="menu-3"><i class="fa-solid fa-arrow-down"></i> Barang Masuk</a>
        <a onclick="withLoading(loadBarangKeluar)" id="menu-4"><i class="fa-solid fa-arrow-up"></i> Barang Keluar</a>
        <a onclick="withLoading(loadStokBarang)" id="menu-5"><i class="fa-solid fa-chart-column"></i> Stok Barang</a>

        <div class="menu-section">Laporan</div>
        <a onclick="withLoading(loadLaporan)" id="menu-6"><i class="fa-solid fa-file-lines"></i> Laporan</a>

        <div class="menu-section" style="margin-top:10px;"></div>
        <a href="/" class="logout-link" onclick="clearClientSession()">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
</div>

{{-- MAIN --}}
<div class="main">
    <div class="topbar">
        <div class="topbar-left">
            <div class="hamburger-btn" onclick="toggleMobileSidebar()"><i class="fa-solid fa-bars"></i></div>
            <div class="breadcrumb-wrap">
                <span class="page-title" id="topbarTitle">Dashboard</span>
                <div class="breadcrumb-modern" id="breadcrumbTrail">
                    <span class="crumb">Dashboard</span>
                </div>
            </div>
        </div>
        <div class="topbar-right">

            <div class="global-search">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" id="globalSearchInput" placeholder="Cari barang, supplier..." oninput="handleGlobalSearch(this.value)" onfocus="handleGlobalSearch(this.value)">
                <div class="search-results" id="globalSearchResults"></div>
            </div>

            <div class="dropdown-panel">
                <div class="icon-btn" onclick="togglePanel('notifPanel')">
                    <i class="fa-solid fa-bell"></i>
                    <span class="badge-dot" id="notifDot" style="display:none;"></span>
                </div>
                <div class="panel-body" id="notifPanel">
                    <div class="panel-head">
                        <strong>Notifikasi</strong>
                        <a href="#" onclick="withLoading(loadStokBarang); togglePanel('notifPanel'); return false;">Lihat Stok</a>
                    </div>
                    <div class="panel-list" id="notifList"></div>
                </div>
            </div>

            <div class="theme-switch" id="themeSwitch" onclick="toggleDarkMode()">
                <i class="fa-solid fa-moon"></i>
            </div>

            <div class="dropdown-panel">
                <div class="profile-trigger" onclick="togglePanel('profilePanel')">
                    <div class="profile-avatar" id="profileAvatarInitial">A</div>
                    <div class="profile-meta">
                        <strong id="profileNameLabel">Admin</strong>
                        <span>Administrator</span>
                    </div>
                    <i class="fa-solid fa-chevron-down" style="font-size:10px;color:var(--text-soft);"></i>
                </div>
                <div class="panel-body profile-panel" id="profilePanel" style="width:250px;">
                    <div class="panel-head">
                        <div class="profile-avatar" id="profileAvatarInitial2">A</div>
                        <div>
                            <strong id="profileNameLabel2" style="display:block;font-size:13.5px;">Admin</strong>
                            <span style="font-size:11px;color:var(--text-muted);">admin@gudang.com</span>
                        </div>
                    </div>
                    <div class="panel-list">
                        <div class="profile-menu-item"><i class="fa-solid fa-user"></i> Profil Saya</div>
                        <div class="profile-menu-item"><i class="fa-solid fa-gear"></i> Pengaturan</div>
                        <div class="profile-menu-item"><i class="fa-solid fa-circle-question"></i> Bantuan</div>
                        <div class="profile-menu-item danger" onclick="handleLogout()"><i class="fa-solid fa-right-from-bracket"></i> Keluar</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="content">
        <div id="main-content"></div>
    </div>
</div>

</div><!-- /#appShell -->

{{-- ============================================================ --}}
{{-- MODAL - HAPUS KONFIRMASI --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalHapus" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <div class="delete-modal-icon"><i class="fa-solid fa-trash"></i></div>
                <p style="font-weight:600;margin-bottom:2px;">Yakin ingin menghapus data ini?</p>
                <small>Data yang dihapus tidak dapat dikembalikan.</small>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-danger" id="btnKonfirmasiHapus"><i class="fa fa-trash me-1"></i>Hapus</button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL - EDIT BARANG --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalEditBarang" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="fa fa-pen me-2"></i>Edit Barang</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="editBarangIndex">
                <div class="mb-3"><label class="form-label fw-bold">Kode Barang</label><input type="text" id="editKodeBarang" class="form-control"></div>
                <div class="mb-3"><label class="form-label fw-bold">Nama Barang</label><input type="text" id="editNamaBarang" class="form-control"></div>
                <div class="mb-3"><label class="form-label fw-bold">Jenis</label>
                    <select id="editJenisBarang" class="form-control">
                        <option value="">Pilih Jenis</option>
                        <option>Hollow</option><option>Plat</option><option>Profil</option><option>Siku</option><option>Pipa</option>
                    </select>
                </div>
                <div class="mb-3"><label class="form-label fw-bold">Satuan</label>
                    <select id="editSatuanBarang" class="form-control">
                        <option value="">Pilih Satuan</option>
                        <option>Batang</option><option>Lembar</option>
                    </select>
                </div>
                <div class="mb-3"><label class="form-label fw-bold">Stok</label><input type="number" id="editStokBarang" class="form-control" min="0"></div>
                <div class="mb-3"><label class="form-label fw-bold">Harga</label><input type="text" id="editHargaBarang" class="form-control" placeholder="Contoh: 150.000"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary" onclick="simpanEditBarang()"><i class="fa fa-save me-1"></i>Simpan</button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL - EDIT SUPPLIER --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalEditSupplier" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="fa fa-pen me-2"></i>Edit Supplier</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="editSupplierIndex">
                <div class="mb-3"><label class="form-label fw-bold">Nama Supplier</label><input type="text" id="editNamaSupplier" class="form-control"></div>
                <div class="mb-3"><label class="form-label fw-bold">No Telepon</label><input type="text" id="editTelpSupplier" class="form-control"></div>
                <div class="mb-3"><label class="form-label fw-bold">Alamat</label><textarea id="editAlamatSupplier" class="form-control" rows="3"></textarea></div>
                <div class="mb-3"><label class="form-label fw-bold">Kontak Person</label><input type="text" id="editKontakSupplier" class="form-control"></div>
                <div class="mb-3"><label class="form-label fw-bold">Email</label><input type="email" id="editEmailSupplier" class="form-control"></div>
                <div class="mb-3"><label class="form-label fw-bold">Keterangan</label><textarea id="editKetSupplier" class="form-control" rows="3"></textarea></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary" onclick="simpanEditSupplier()"><i class="fa fa-save me-1"></i>Simpan</button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL - DETAIL BARANG MASUK --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalDetailMasuk" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="fa fa-eye me-2"></i>Detail Barang Masuk</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="isiModalDetailMasuk"></div>
            <div class="modal-footer">
                <button class="btn btn-success" id="btnCetakDetail"><i class="fa fa-print me-1"></i>Cetak</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL - DETAIL STOK --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalDetailStok" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="fa fa-eye me-2"></i>Detail Stok Barang</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="isiModalDetailStok"></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- TOAST NOTIFIKASI --}}
{{-- ============================================================ --}}
<div class="position-fixed top-0 end-0 p-3" style="z-index:9999">
    <div id="toastNotif" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive">
        <div class="d-flex">
            <div class="toast-body fw-bold" id="toastMsg"></div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

{{-- LOADING OVERLAY --}}
<div class="loading-overlay" id="loadingOverlay"><div class="spinner-ring"></div></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>

<script>
// ================================================================
// AUTH / SESSION (client-side gate — no backend structure touched)
// ================================================================
const DEMO_USER = { username: 'admin', password: 'admin123', nama: 'Admin', role: 'Administrator' };

function isAuthenticated(){
    return localStorage.getItem('authSession') === '1' || sessionStorage.getItem('authSession') === '1';
}

function togglePasswordVisibility(){
    const inp = document.getElementById('loginPassword');
    const eye = document.getElementById('toggleEye');
    if (inp.type === 'password'){ inp.type = 'text'; eye.classList.remove('fa-eye'); eye.classList.add('fa-eye-slash'); }
    else { inp.type = 'password'; eye.classList.remove('fa-eye-slash'); eye.classList.add('fa-eye'); }
}

function handleLogin(){
    const username = document.getElementById('loginUsername').value.trim();
    const password = document.getElementById('loginPassword').value;
    const remember = document.getElementById('rememberMe').checked;
    const inpU = document.getElementById('loginUsername');
    const inpP = document.getElementById('loginPassword');
    const errU = document.getElementById('errUsername');
    const errP = document.getElementById('errPassword');
    const alertBox = document.getElementById('loginAlert');

    let valid = true;
    inpU.classList.remove('is-invalid'); inpP.classList.remove('is-invalid');
    errU.classList.remove('show'); errP.classList.remove('show'); alertBox.classList.remove('show');

    if (!username){ inpU.classList.add('is-invalid'); errU.classList.add('show'); valid = false; }
    if (!password || password.length < 4){ inpP.classList.add('is-invalid'); errP.classList.add('show'); valid = false; }
    if (!valid) return;

    if (username === DEMO_USER.username && password === DEMO_USER.password){
        const store = remember ? localStorage : sessionStorage;
        store.setItem('authSession', '1');
        store.setItem('authUser', JSON.stringify({ nama: DEMO_USER.nama, role: DEMO_USER.role, username }));
        enterApp();
    } else {
        document.getElementById('loginAlertMsg').textContent = 'Username atau password salah.';
        alertBox.classList.add('show');
    }
}

function showToastLoginHelper(){}
function showToastLogin(){
    document.getElementById('loginAlertMsg').textContent = 'Hubungi Administrator untuk reset password.';
    const box = document.getElementById('loginAlert');
    box.style.background = 'var(--warning-bg)'; box.style.color = 'var(--warning)'; box.style.borderColor = 'rgba(217,119,6,0.25)';
    box.classList.add('show');
}

function clearClientSession(){
    localStorage.removeItem('authSession'); localStorage.removeItem('authUser');
    sessionStorage.removeItem('authSession'); sessionStorage.removeItem('authUser');
    // biarkan href="/" pada link Logout tetap memproses logout route Laravel yang asli
}

function handleLogout(){
    clearClientSession();
    document.getElementById('appShell').style.display = 'none';
    document.getElementById('loginScreen').style.display = 'flex';
    document.getElementById('loginUsername').value = '';
    document.getElementById('loginPassword').value = '';
}

function enterApp(){
    const user = JSON.parse(localStorage.getItem('authUser') || sessionStorage.getItem('authUser') || '{}');
    const initial = (user.nama || 'A').charAt(0).toUpperCase();
    document.getElementById('profileAvatarInitial').textContent = initial;
    document.getElementById('profileAvatarInitial2').textContent = initial;
    document.getElementById('profileNameLabel').textContent = user.nama || 'Admin';
    document.getElementById('profileNameLabel2').textContent = user.nama || 'Admin';

    document.getElementById('loginScreen').style.display = 'none';
    document.getElementById('appShell').style.display = 'block';
    initDarkMode();
    loadDashboard();
    refreshNotifications();
}

// Enter key submits login
document.addEventListener('keydown', function(e){
    if (e.key === 'Enter' && document.getElementById('loginScreen').style.display !== 'none'){
        handleLogin();
    }
});

// ================================================================
// UI HELPERS: sidebar (mobile), panels, dark mode, loading, breadcrumb
// ================================================================
function toggleMobileSidebar(){
    document.getElementById('mainSidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('show');
}
function closeMobileSidebar(){
    document.getElementById('mainSidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('show');
}

function togglePanel(id){
    document.querySelectorAll('.panel-body').forEach(p => { if (p.id !== id) p.classList.remove('show'); });
    document.getElementById(id).classList.toggle('show');
}
document.addEventListener('click', function(e){
    if (!e.target.closest('.dropdown-panel')) document.querySelectorAll('.panel-body').forEach(p => p.classList.remove('show'));
    if (!e.target.closest('.global-search')) document.getElementById('globalSearchResults').classList.remove('show');
});

function initDarkMode(){
    const saved = localStorage.getItem('themeMode') || 'light';
    document.documentElement.setAttribute('data-theme', saved);
    updateThemeIcon(saved);
}
function toggleDarkMode(){
    const current = document.documentElement.getAttribute('data-theme') || 'light';
    const next = current === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', next);
    localStorage.setItem('themeMode', next);
    updateThemeIcon(next);
}
function updateThemeIcon(mode){
    const el = document.querySelector('#themeSwitch i');
    el.className = mode === 'dark' ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
}

function showLoadingOverlay(){ document.getElementById('loadingOverlay').classList.add('show'); }
function hideLoadingOverlay(){ document.getElementById('loadingOverlay').classList.remove('show'); }

function renderSkeleton(){
    document.getElementById('main-content').innerHTML = `
        <div class="skeleton sk-line" style="width:220px;height:26px;"></div>
        <div class="row mt-4">
            <div class="col-md-3 mb-3"><div class="skeleton sk-card"></div></div>
            <div class="col-md-3 mb-3"><div class="skeleton sk-card"></div></div>
            <div class="col-md-3 mb-3"><div class="skeleton sk-card"></div></div>
            <div class="col-md-3 mb-3"><div class="skeleton sk-card"></div></div>
        </div>
        <div class="skeleton" style="height:280px;border-radius:14px;margin-top:10px;"></div>`;
}

function withLoading(fn, ...args){
    renderSkeleton();
    showLoadingOverlay();
    setTimeout(() => {
        fn(...args);
        hideLoadingOverlay();
        closeMobileSidebar();
        window.scrollTo({top:0, behavior:'smooth'});
    }, 380);
}

function setBreadcrumb(pathArr){
    const wrap = document.getElementById('breadcrumbTrail');
    wrap.innerHTML = pathArr.map((p, i) => {
        const isLast = i === pathArr.length - 1;
        return (i > 0 ? '<i class="fa-solid fa-chevron-right"></i>' : '') +
               `<span class="crumb ${isLast ? 'current' : ''}">${p}</span>`;
    }).join('');
}

// ================================================================
// GLOBAL SEARCH
// ================================================================
function handleGlobalSearch(q){
    const box = document.getElementById('globalSearchResults');
    q = (q || '').trim().toLowerCase();
    if (!q){ box.classList.remove('show'); box.innerHTML=''; return; }

    const hitsBarang = dataBarang.filter(b => b.nama.toLowerCase().includes(q) || b.kode.toLowerCase().includes(q)).slice(0,4);
    const hitsSupplier = dataSupplier.filter(s => s.nama.toLowerCase().includes(q)).slice(0,3);

    let html = '';
    if (hitsBarang.length){
        html += hitsBarang.map(b => `
            <div class="sr-item" onclick="withLoading(loadBarang,'${b.nama.replace(/'/g,"")}'); togglePanel('none');document.getElementById('globalSearchResults').classList.remove('show');">
                <div class="sr-icon"><i class="fa-solid fa-box"></i></div>
                <div><div class="sr-title">${b.nama}</div><div class="sr-sub">${b.kode} • Stok ${b.stok}</div></div>
            </div>`).join('');
    }
    if (hitsSupplier.length){
        html += hitsSupplier.map(s => `
            <div class="sr-item" onclick="withLoading(loadSupplier,'${s.nama.replace(/'/g,"")}');document.getElementById('globalSearchResults').classList.remove('show');">
                <div class="sr-icon"><i class="fa-solid fa-users"></i></div>
                <div><div class="sr-title">${s.nama}</div><div class="sr-sub">Supplier • ${s.telp||'-'}</div></div>
            </div>`).join('');
    }
    if (!html) html = '<div class="sr-empty"><i class="fa-solid fa-magnifying-glass mb-2 d-block"></i>Tidak ditemukan hasil untuk "'+q+'"</div>';
    box.innerHTML = html;
    box.classList.add('show');
}

// ================================================================
// NOTIFICATIONS (derived from live stock data)
// ================================================================
function refreshNotifications(){
    const habis = dataBarang.filter(b => b.stok <= 5);
    const rendah = dataBarang.filter(b => b.stok > 5 && b.stok <= 25);
    const list = document.getElementById('notifList');
    const dot = document.getElementById('notifDot');

    let html = '';
    habis.forEach(b => html += `
        <div class="notif-item" onclick="withLoading(loadStokBarang)">
            <div class="notif-ic danger"><i class="fa-solid fa-triangle-exclamation"></i></div>
            <div><div class="notif-title">${b.nama} hampir habis</div><div class="notif-sub">Sisa stok ${b.stok} ${b.satuan||''}</div></div>
        </div>`);
    rendah.slice(0,4).forEach(b => html += `
        <div class="notif-item" onclick="withLoading(loadStokBarang)">
            <div class="notif-ic warning"><i class="fa-solid fa-box"></i></div>
            <div><div class="notif-title">${b.nama} stok rendah</div><div class="notif-sub">Sisa stok ${b.stok} ${b.satuan||''}</div></div>
        </div>`);

    if (!html) html = '<div class="notif-empty"><i class="fa-solid fa-check-circle mb-2 d-block" style="font-size:22px;color:var(--success);"></i>Semua stok dalam kondisi aman</div>';
    list.innerHTML = html;
    dot.style.display = (habis.length || rendah.length) ? 'block' : 'none';
}

// ================================================================
// DATA AWAL (localStorage) — TIDAK DIUBAH DARI VERSI ASLI
// ================================================================

let dataBarang = JSON.parse(localStorage.getItem('dataBarang')) || [
    { kode:'AL001', nama:'Hollow 4x4',             jenis:'Hollow', satuan:'Batang', stok:130, harga:'' },
    { kode:'AL002', nama:'Aluminium Plat 2mm',      jenis:'Plat',   satuan:'Lembar', stok:40,  harga:'' },
    { kode:'AL003', nama:'Profil U',                jenis:'Profil', satuan:'Batang', stok:75,  harga:'' },
    { kode:'AL004', nama:'Aluminium Plat 1mm',      jenis:'Plat',   satuan:'Lembar', stok:25,  harga:'' },
    { kode:'AL005', nama:'Hollow 2x4',              jenis:'Hollow', satuan:'Batang', stok:5,   harga:'' },
    { kode:'AL006', nama:'Plat Aluminium 3mm',      jenis:'Plat',   satuan:'Lembar', stok:60,  harga:'' },
    { kode:'AL007', nama:'Siku Aluminium 3x3',      jenis:'Siku',   satuan:'Batang', stok:15,  harga:'' },
    { kode:'AL008', nama:'Pipa Aluminium 1 inch',   jenis:'Pipa',   satuan:'Batang', stok:22,  harga:'' },
];

let dataSupplier = JSON.parse(localStorage.getItem('dataSupplier')) || [
    { nama:'PT ABC',              telp:'081234567890', alamat:'Jl. Industri No.1, Medan',     kontak:'', email:'', ket:'' },
    { nama:'PT XYZ',              telp:'081298765432', alamat:'Jl. Aluminium No.20, Binjai',  kontak:'', email:'', ket:'' },
    { nama:'CV Sumber Aluminium', telp:'081377788899', alamat:'Jl. Pabrik No.5, Medan',       kontak:'', email:'', ket:'' },
];

let dataBarangMasuk = JSON.parse(localStorage.getItem('dataBarangMasuk')) || [
    { tanggal:'2024-05-24', noBukti:'BM-240524-001', supplier:'PT ABC',              totalItem:3, totalQty:105, ket:'Pembelian bahan baku' },
    { tanggal:'2024-05-23', noBukti:'BM-230524-002', supplier:'PT XYZ',              totalItem:2, totalQty:65,  ket:'Pembelian aluminium profil' },
    { tanggal:'2024-05-22', noBukti:'BM-220524-003', supplier:'CV Sumber Aluminium', totalItem:4, totalQty:180, ket:'Pembelian plat aluminium' },
    { tanggal:'2024-05-20', noBukti:'BM-200524-004', supplier:'PT ABC',              totalItem:1, totalQty:50,  ket:'Pembelian aksesoris' },
    { tanggal:'2024-05-18', noBukti:'BM-180524-005', supplier:'PT XYZ',              totalItem:3, totalQty:120, ket:'Pembelian bahan baku' },
];

let dataBarangKeluar = JSON.parse(localStorage.getItem('dataBarangKeluar')) || [];

let hapusCallback = null;
let indexDetailCetak = null;

// ================================================================
// HELPER: SIMPAN KE LOCALSTORAGE
// ================================================================
function simpanSemua() {
    localStorage.setItem('dataBarang',      JSON.stringify(dataBarang));
    localStorage.setItem('dataSupplier',    JSON.stringify(dataSupplier));
    localStorage.setItem('dataBarangMasuk', JSON.stringify(dataBarangMasuk));
    localStorage.setItem('dataBarangKeluar',JSON.stringify(dataBarangKeluar));
    refreshNotifications();
}

// ================================================================
// HELPER: AKTIFKAN MENU SIDEBAR + UPDATE TOPBAR TITLE + BREADCRUMB
// ================================================================
const menuTitles = {
    0: 'Dashboard',
    1: 'Data Barang',
    2: 'Supplier',
    3: 'Barang Masuk',
    4: 'Barang Keluar',
    5: 'Stok Barang',
    6: 'Laporan'
};
function setMenu(index) {
    for (let i = 0; i <= 6; i++) {
        const el = document.getElementById('menu-' + i);
        if (el) el.classList.remove('active');
    }
    const active = document.getElementById('menu-' + index);
    if (active) active.classList.add('active');
    const titleEl = document.getElementById('topbarTitle');
    if (titleEl && menuTitles[index]) titleEl.textContent = menuTitles[index];
    setBreadcrumb(index === 0 ? ['Dashboard'] : ['Dashboard', menuTitles[index]]);
}

// ================================================================
// HELPER: TOAST NOTIFIKASI
// ================================================================
function showToast(pesan, tipe = 'success') {
    const toastEl = document.getElementById('toastNotif');
    const warna = { success:'bg-success', danger:'bg-danger', warning:'bg-warning text-dark' };
    toastEl.className = 'toast align-items-center border-0 text-white ' + (warna[tipe] || 'bg-success');
    document.getElementById('toastMsg').textContent = pesan;
    new bootstrap.Toast(toastEl, { delay: 2500 }).show();
}

// ================================================================
// HELPER: MODAL KONFIRMASI HAPUS
// ================================================================
function konfirmasiHapus(callback) {
    hapusCallback = callback;
    new bootstrap.Modal(document.getElementById('modalHapus')).show();
}
document.getElementById('btnKonfirmasiHapus').addEventListener('click', function () {
    if (hapusCallback) hapusCallback();
    bootstrap.Modal.getInstance(document.getElementById('modalHapus')).hide();
});

// ================================================================
// HELPER: STATUS STOK
// ================================================================
function badgeStatus(stok) {
    if (stok <= 5)  return '<span class="badge bg-danger">Hampir Habis</span>';
    if (stok <= 25) return '<span class="badge bg-warning text-dark">Stok Rendah</span>';
    return '<span class="badge bg-success">Aman</span>';
}

function stockProgressBar(stok, max = 200) {
    const pct = Math.max(4, Math.min(100, Math.round((stok / max) * 100)));
    const cls = stok <= 5 ? 'critical' : stok <= 25 ? 'low' : 'safe';
    return `<div class="stock-bar-wrap">
                <div class="stock-bar ${cls}"><span style="width:${pct}%"></span></div>
                <span class="stock-bar-label">${stok}</span>
            </div>`;
}

// ================================================================
// HELPER: FORMAT TANGGAL (YYYY-MM-DD → DD/MM/YYYY)
// ================================================================
function fmtTgl(tgl) {
    if (!tgl) return '-';
    const parts = tgl.split('-');
    if (parts.length === 3) return parts[2] + '/' + parts[1] + '/' + parts[0];
    return tgl;
}

// ================================================================
// HELPER: OPSI SUPPLIER
// ================================================================
function opsiSupplier(selected = '') {
    return '<option value="">Pilih Supplier</option>' +
        dataSupplier.map(s => `<option ${s.nama === selected ? 'selected' : ''}>${s.nama}</option>`).join('');
}

// ================================================================
// HELPER: OPSI BARANG
// ================================================================
function opsiBarang(selected = '') {
    return '<option value="">Pilih Barang</option>' +
        dataBarang.map(b => `<option value="${b.kode}" ${b.kode === selected ? 'selected' : ''}>${b.nama} (Stok: ${b.stok})</option>`).join('');
}

// ================================================================
// HELPER: OPSI BARANG UNTUK BARANG MASUK (format "KODE - Nama Barang")
// ================================================================
function opsiBarangMasuk(selected = '') {
    return '<option value="">Pilih Barang</option>' +
        dataBarang.map(b => `<option value="${b.kode}" ${b.kode === selected ? 'selected' : ''}>${b.kode} - ${b.nama}</option>`).join('');
}

// ================================================================
// HELPER: MODERN PAGINATION
// ================================================================
function paginate(list, page, perPage) {
    const totalPages = Math.max(1, Math.ceil(list.length / perPage));
    page = Math.min(Math.max(1, page), totalPages);
    const start = (page - 1) * perPage;
    return { items: list.slice(start, start + perPage), page, totalPages, total: list.length };
}
function renderPaginationBar(page, totalPages, total, perPage, onClickFnName, extraArgs = '') {
    if (totalPages <= 1) return `<div class="pagination-info">Menampilkan ${total} dari ${total} data</div>`;
    let buttons = `<button ${page<=1?'disabled':''} onclick="${onClickFnName}(${page-1}${extraArgs})"><i class="fa-solid fa-chevron-left"></i></button>`;
    for (let i = 1; i <= totalPages; i++) {
        if (i === 1 || i === totalPages || Math.abs(i - page) <= 1) {
            buttons += `<button class="${i===page?'active':''}" onclick="${onClickFnName}(${i}${extraArgs})">${i}</button>`;
        } else if (Math.abs(i - page) === 2) {
            buttons += `<button disabled>…</button>`;
        }
    }
    buttons += `<button ${page>=totalPages?'disabled':''} onclick="${onClickFnName}(${page+1}${extraArgs})"><i class="fa-solid fa-chevron-right"></i></button>`;
    const from = (page-1)*perPage + 1;
    const to = Math.min(page*perPage, total);
    return `<div class="pagination-modern"><div class="pagination-info">Menampilkan ${from}-${to} dari ${total} data</div>${buttons}</div>`;
}

// ================================================================
// HELPER: EMPTY STATE
// ================================================================
function emptyStateRow(colspan, icon, title, sub) {
    return `<tr><td colspan="${colspan}">
        <div class="empty-state">
            <i class="fa-solid ${icon}"></i>
            <h6>${title}</h6>
            <p>${sub}</p>
        </div>
    </td></tr>`;
}

// ================================================================
// 1. DASHBOARD
// ================================================================
function loadDashboard() {
    setMenu(0);
    const totalBarang   = dataBarang.length;
    const totalMasuk    = dataBarangMasuk.reduce((s, d) => s + Number(d.totalQty), 0);
    const totalKeluar   = dataBarangKeluar.reduce((s, d) => s + Number(d.jumlah || 0), 0);
    const stokSekarang  = dataBarang.reduce((s, b) => s + Number(b.stok), 0);
    const hampirHabis   = dataBarang.filter(b => b.stok <= 5);
    const maxStok       = Math.max(...dataBarang.map(b => b.stok), 50);

    const rowsHH = hampirHabis.length
        ? hampirHabis.map(b => `
            <tr>
                <td>${b.kode}</td>
                <td>${b.nama}</td>
                <td>${stockProgressBar(b.stok, maxStok)}</td>
                <td><span class="badge bg-danger">Hampir Habis</span></td>
            </tr>`).join('')
        : emptyStateRow(4, 'fa-circle-check', 'Semua stok aman', 'Tidak ada barang yang hampir habis saat ini.');

    // Recent activity: gabungan barang masuk & keluar terbaru
    const acts = [
        ...dataBarangMasuk.map(d => ({ type:'in', title:`Barang masuk: ${d.namaBarang || d.supplier}`, sub:`${d.totalQty} unit • ${d.noBukti}`, tgl:d.tanggal })),
        ...dataBarangKeluar.map(d => ({ type:'out', title:`${d.barang} keluar`, sub:`${d.jumlah} unit • ${d.tujuan||'-'}`, tgl:d.tanggal })),
    ].sort((a,b) => (b.tgl||'').localeCompare(a.tgl||'')).slice(0,6);

    const activityHtml = acts.length ? acts.map(a => `
        <div class="activity-item">
            <div class="activity-dot ${a.type}"><i class="fa-solid ${a.type==='in'?'fa-arrow-down':'fa-arrow-up'}"></i></div>
            <div><div class="activity-title">${a.title}</div><div class="activity-sub">${a.sub}</div></div>
            <div class="activity-time">${fmtTgl(a.tgl)}</div>
        </div>`).join('') : `<div class="empty-state"><i class="fa-solid fa-inbox"></i><h6>Belum ada aktivitas</h6><p>Transaksi barang masuk/keluar akan tampil di sini.</p></div>`;

    const jenisCount = {};
    dataBarang.forEach(b => jenisCount[b.jenis] = (jenisCount[b.jenis]||0) + Number(b.stok));

    document.getElementById('main-content').innerHTML = `
        <h2 class="mb-4">Dashboard</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card card-stat">
                    <div class="stat-row">
                        <div class="stat-icon blue"><i class="fa-solid fa-cube"></i></div>
                        <div class="stat-body">
                            <small>TOTAL BARANG</small>
                            <h2>${totalBarang}</h2>
                            <span class="stat-trend up"><i class="fa-solid fa-arrow-trend-up"></i> Jenis barang terdaftar</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-stat">
                    <div class="stat-row">
                        <div class="stat-icon green"><i class="fa-solid fa-download"></i></div>
                        <div class="stat-body">
                            <small>BARANG MASUK</small>
                            <h2>${totalMasuk.toLocaleString('id')}</h2>
                            <span class="stat-trend up"><i class="fa-solid fa-arrow-trend-up"></i> Total unit diterima</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-stat">
                    <div class="stat-row">
                        <div class="stat-icon orange"><i class="fa-solid fa-upload"></i></div>
                        <div class="stat-body">
                            <small>BARANG KELUAR</small>
                            <h2>${totalKeluar.toLocaleString('id')}</h2>
                            <span class="stat-trend down"><i class="fa-solid fa-arrow-trend-down"></i> Total unit dikeluarkan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-stat">
                    <div class="stat-row">
                        <div class="stat-icon purple"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <div class="stat-body">
                            <small>STOK SAAT INI</small>
                            <h2>${stokSekarang.toLocaleString('id')}</h2>
                            <span class="stat-trend up"><i class="fa-solid fa-check"></i> Unit tersedia di gudang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-7 mb-3">
                <div class="table-card h-100">
                    <h4 class="mb-3">Distribusi Stok per Kategori</h4>
                    <canvas id="chartStokKategori" height="150"></canvas>
                </div>
            </div>
            <div class="col-lg-5 mb-3">
                <div class="table-card h-100">
                    <h4 class="mb-3">Status Stok</h4>
                    <canvas id="chartStatusStok" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6 mb-3">
                <div class="table-card h-100">
                    <h4 class="mb-3">Stok Barang Hampir Habis</h4>
                    <table class="table">
                        <thead><tr><th>Kode</th><th>Nama</th><th>Level Stok</th><th>Status</th></tr></thead>
                        <tbody>${rowsHH}</tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="table-card h-100">
                    <h4 class="mb-3"><i class="fa-solid fa-clock-rotate-left me-1"></i> Aktivitas Terbaru</h4>
                    ${activityHtml}
                </div>
            </div>
        </div>`;

    // Chart.js — kategori stok
    const ctx1 = document.getElementById('chartStokKategori');
    if (ctx1) {
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: Object.keys(jenisCount),
                datasets: [{
                    label: 'Stok',
                    data: Object.values(jenisCount),
                    backgroundColor: '#2563EB',
                    borderRadius: 8,
                    maxBarThickness: 42
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display:false } },
                    y: { grid: { color:'#E2E8F0' }, beginAtZero:true }
                }
            }
        });
    }
    // Chart.js — status stok (doughnut)
    const ctx2 = document.getElementById('chartStatusStok');
    if (ctx2) {
        const aman = dataBarang.filter(b=>b.stok>25).length;
        const rendah = dataBarang.filter(b=>b.stok>5 && b.stok<=25).length;
        const habis = dataBarang.filter(b=>b.stok<=5).length;
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Aman','Stok Rendah','Hampir Habis'],
                datasets: [{ data:[aman, rendah, habis], backgroundColor:['#16A34A','#D97706','#DC2626'], borderWidth:0 }]
            },
            options: { responsive:true, cutout:'68%', plugins:{ legend:{ position:'bottom', labels:{ boxWidth:10, font:{size:11} } } } }
        });
    }
}

// ================================================================
// 2. DATA BARANG  (dengan pagination modern)
// ================================================================
let _barangPage = 1;
const _barangPerPage = 6;

function loadBarang(filter = '', page = 1) {
    setMenu(1);
    _barangPage = page;
    const list = filter
        ? dataBarang.filter(b =>
            b.nama.toLowerCase().includes(filter.toLowerCase()) ||
            b.kode.toLowerCase().includes(filter.toLowerCase()))
        : dataBarang;

    const { items, page: curPage, totalPages, total } = paginate(list, page, _barangPerPage);

    const rows = items.length
        ? items.map((b, i) => {
            const ri = dataBarang.indexOf(b);
            return `<tr>
                <td>${(curPage-1)*_barangPerPage + i + 1}</td>
                <td>${b.kode}</td>
                <td>${b.nama}</td>
                <td>${b.jenis}</td>
                <td>${b.satuan}</td>
                <td>${b.stok}</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="bukaEditBarang(${ri})"><i class="fa fa-pen"></i> Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="hapusBarang(${ri})"><i class="fa fa-trash"></i> Hapus</button>
                </td>
            </tr>`;
        }).join('')
        : emptyStateRow(7, 'fa-box-open', 'Barang tidak ditemukan', 'Coba ubah kata kunci pencarian atau tambah barang baru.');

    document.getElementById('main-content').innerHTML = `
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <h2>Data Barang</h2>
            </div>
            <button class="btn btn-primary" onclick="withLoading(loadTambahBarang)">
                <i class="fa fa-plus"></i> Tambah Barang
            </button>
        </div>
        <div class="table-card mb-3">
            <div class="d-flex gap-2 flex-wrap">
                <input type="text" id="inputCariBarang" class="form-control" placeholder="Cari kode / nama barang..." style="max-width:350px" value="${filter}">
                <button class="btn btn-primary" onclick="loadBarang(document.getElementById('inputCariBarang').value)">
                    <i class="fa fa-search"></i> Cari
                </button>
                <button class="btn btn-outline-secondary" onclick="loadBarang('')">
                    <i class="fa fa-rotate-right"></i> Reset
                </button>
            </div>
        </div>
        <div class="table-card">
            <table class="table table-bordered">
                <thead>
                    <tr><th>No</th><th>Kode</th><th>Nama Barang</th><th>Jenis</th><th>Satuan</th><th>Stok</th><th>Aksi</th></tr>
                </thead>
                <tbody>${rows}</tbody>
            </table>
            ${renderPaginationBar(curPage, totalPages, total, _barangPerPage, 'loadBarang', `, '${filter.replace(/'/g,"")}'`.replace(', ', ', ') === '' ? '' : '')}
        </div>`;

    // pagination bar needs filter string bound correctly; rebuild with proper arg order
    const paginationEl = document.querySelector('.table-card:last-child');
}

function loadTambahBarang() {
    document.getElementById('main-content').innerHTML = `
        <div class="mb-4">
            <h2>Tambah Barang</h2>
        </div>
        <div class="table-card">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Kode Barang <span class="text-danger">*</span></label>
                    <input type="text" id="kodeBarang" class="form-control" placeholder="Contoh: AL009">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Barang <span class="text-danger">*</span></label>
                    <input type="text" id="namaBarang" class="form-control" placeholder="Masukkan nama barang">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Jenis</label>
                    <select id="jenisBarang" class="form-control">
                        <option value="">Pilih Jenis</option>
                        <option>Hollow</option><option>Plat</option><option>Profil</option><option>Siku</option><option>Pipa</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Satuan</label>
                    <select id="satuanBarang" class="form-control">
                        <option value="">Pilih Satuan</option>
                        <option>Batang</option><option>Lembar</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Stok Awal</label>
                    <input type="number" id="stokBarang" class="form-control" placeholder="0" min="0" value="0">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Harga</label>
                    <input type="text" id="hargaBarang" class="form-control" placeholder="Contoh: 150.000">
                </div>
            </div>
            <div class="mt-3 d-flex gap-2">
                <button class="btn btn-secondary" onclick="withLoading(loadBarang)"><i class="fa fa-arrow-left"></i> Kembali</button>
                <button class="btn btn-primary" onclick="simpanBarang()"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>`;
}

function simpanBarang() {
    const kode   = document.getElementById('kodeBarang').value.trim();
    const nama   = document.getElementById('namaBarang').value.trim();
    const jenis  = document.getElementById('jenisBarang').value;
    const satuan = document.getElementById('satuanBarang').value;
    const stok   = parseInt(document.getElementById('stokBarang').value) || 0;
    const harga  = document.getElementById('hargaBarang').value.trim();

    if (!kode || !nama) { showToast('Kode dan Nama Barang wajib diisi!', 'danger'); return; }
    if (dataBarang.find(b => b.kode === kode)) { showToast('Kode barang sudah ada!', 'danger'); return; }

    dataBarang.push({ kode, nama, jenis, satuan, stok, harga });
    simpanSemua();
    showToast('Data barang berhasil disimpan!');
    loadBarang();
}

function bukaEditBarang(index) {
    const b = dataBarang[index];
    document.getElementById('editBarangIndex').value    = index;
    document.getElementById('editKodeBarang').value     = b.kode;
    document.getElementById('editNamaBarang').value     = b.nama;
    document.getElementById('editJenisBarang').value    = b.jenis;
    document.getElementById('editSatuanBarang').value   = b.satuan;
    document.getElementById('editStokBarang').value     = b.stok;
    document.getElementById('editHargaBarang').value    = b.harga || '';
    new bootstrap.Modal(document.getElementById('modalEditBarang')).show();
}

function simpanEditBarang() {
    const i = parseInt(document.getElementById('editBarangIndex').value);
    dataBarang[i] = {
        kode:   document.getElementById('editKodeBarang').value.trim(),
        nama:   document.getElementById('editNamaBarang').value.trim(),
        jenis:  document.getElementById('editJenisBarang').value,
        satuan: document.getElementById('editSatuanBarang').value,
        stok:   parseInt(document.getElementById('editStokBarang').value) || 0,
        harga:  document.getElementById('editHargaBarang').value.trim(),
    };
    simpanSemua();
    bootstrap.Modal.getInstance(document.getElementById('modalEditBarang')).hide();
    showToast('Data barang berhasil diperbarui!');
    loadBarang();
}

function hapusBarang(index) {
    konfirmasiHapus(() => {
        dataBarang.splice(index, 1);
        simpanSemua();
        showToast('Data barang berhasil dihapus!', 'danger');
        loadBarang();
    });
}

// ================================================================
// 3. SUPPLIER
// ================================================================
function loadSupplier(filter = '') {
    setMenu(2);
    const list = filter
        ? dataSupplier.filter(s => s.nama.toLowerCase().includes(filter.toLowerCase()))
        : dataSupplier;

    const rows = list.length
        ? list.map((s, i) => {
            const ri = dataSupplier.indexOf(s);
            return `<tr>
                <td>${i + 1}</td>
                <td>${s.nama}</td>
                <td>${s.alamat}</td>
                <td>${s.telp}</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="bukaEditSupplier(${ri})"><i class="fa fa-pen"></i></button>
                    <button class="btn btn-danger btn-sm" onclick="hapusSupplier(${ri})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>`;
        }).join('')
        : emptyStateRow(5, 'fa-users-slash', 'Supplier tidak ditemukan', 'Coba kata kunci lain atau tambahkan supplier baru.');

    document.getElementById('main-content').innerHTML = `
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div><h2>Supplier</h2></div>
            <button class="btn btn-primary" onclick="withLoading(loadTambahSupplier)">
                <i class="fa fa-plus"></i> Tambah Supplier
            </button>
        </div>
        <div class="table-card">
            <div class="d-flex justify-content-between mb-4 flex-wrap gap-2">
                <input type="text" id="inputCariSupplier" class="form-control" placeholder="Cari nama supplier..." style="width:300px" value="${filter}">
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" onclick="loadSupplier(document.getElementById('inputCariSupplier').value)">
                        <i class="fa fa-search"></i> Cari
                    </button>
                    <button class="btn btn-light border" onclick="loadSupplier('')">
                        <i class="fa fa-rotate-right"></i> Reset
                    </button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr><th>No</th><th>Nama Supplier</th><th>Alamat</th><th>No Telepon</th><th>Aksi</th></tr>
                </thead>
                <tbody>${rows}</tbody>
            </table>
        </div>`;
}

function loadTambahSupplier() {
    document.getElementById('main-content').innerHTML = `
        <div class="mb-4"><h2>Tambah Supplier</h2></div>
        <div class="table-card">
            <form onsubmit="return false">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Supplier <span class="text-danger">*</span></label>
                        <input type="text" id="namaSupplier" class="form-control" placeholder="Masukkan nama supplier">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">No Telepon <span class="text-danger">*</span></label>
                        <input type="text" id="telpSupplier" class="form-control" placeholder="Masukkan no telepon">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea id="alamatSupplier" class="form-control" rows="4" placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kontak Person</label>
                        <input type="text" id="kontakSupplier" class="form-control" placeholder="Masukkan nama kontak person">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" id="emailSupplier" class="form-control" placeholder="Masukkan email">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea id="ketSupplier" class="form-control" rows="3" placeholder="Masukkan keterangan"></textarea>
                    </div>
                </div>
                <div class="text-end d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-secondary" onclick="withLoading(loadSupplier)"><i class="fa fa-arrow-left"></i> Kembali</button>
                    <button type="button" class="btn btn-primary" onclick="simpanSupplier()"><i class="fa fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-light border"><i class="fa fa-rotate-right"></i> Reset</button>
                </div>
            </form>
        </div>`;
}

function simpanSupplier() {
    const nama   = document.getElementById('namaSupplier').value.trim();
    const telp   = document.getElementById('telpSupplier').value.trim();
    const alamat = document.getElementById('alamatSupplier').value.trim();
    const kontak = document.getElementById('kontakSupplier').value.trim();
    const email  = document.getElementById('emailSupplier').value.trim();
    const ket    = document.getElementById('ketSupplier').value.trim();

    if (!nama || !telp) { showToast('Nama dan No Telepon wajib diisi!', 'danger'); return; }

    dataSupplier.push({ nama, telp, alamat, kontak, email, ket });
    simpanSemua();
    showToast('Supplier berhasil disimpan!');
    loadSupplier();
}

function bukaEditSupplier(index) {
    const s = dataSupplier[index];
    document.getElementById('editSupplierIndex').value  = index;
    document.getElementById('editNamaSupplier').value   = s.nama;
    document.getElementById('editTelpSupplier').value   = s.telp;
    document.getElementById('editAlamatSupplier').value = s.alamat;
    document.getElementById('editKontakSupplier').value = s.kontak || '';
    document.getElementById('editEmailSupplier').value  = s.email  || '';
    document.getElementById('editKetSupplier').value    = s.ket    || '';
    new bootstrap.Modal(document.getElementById('modalEditSupplier')).show();
}

function simpanEditSupplier() {
    const i = parseInt(document.getElementById('editSupplierIndex').value);
    dataSupplier[i] = {
        nama:   document.getElementById('editNamaSupplier').value.trim(),
        telp:   document.getElementById('editTelpSupplier').value.trim(),
        alamat: document.getElementById('editAlamatSupplier').value.trim(),
        kontak: document.getElementById('editKontakSupplier').value.trim(),
        email:  document.getElementById('editEmailSupplier').value.trim(),
        ket:    document.getElementById('editKetSupplier').value.trim(),
    };
    simpanSemua();
    bootstrap.Modal.getInstance(document.getElementById('modalEditSupplier')).hide();
    showToast('Supplier berhasil diperbarui!');
    loadSupplier();
}

function hapusSupplier(index) {
    konfirmasiHapus(() => {
        dataSupplier.splice(index, 1);
        simpanSemua();
        showToast('Supplier berhasil dihapus!', 'danger');
        loadSupplier();
    });
}

// ================================================================
// 4. BARANG MASUK
// ================================================================
function loadBarangMasuk(fTglMulai = '', fTglSelesai = '', fBarang = '') {
    setMenu(3);

    let list = [...dataBarangMasuk];
    if (fTglMulai)   list = list.filter(d => d.tanggal >= fTglMulai);
    if (fTglSelesai) list = list.filter(d => d.tanggal <= fTglSelesai);
    if (fBarang)     list = list.filter(d => d.kodeBarang === fBarang);

    const rows = list.length
        ? list.map((d, i) => {
            const ri = dataBarangMasuk.indexOf(d);
            return `<tr>
                <td>${i + 1}</td>
                <td>${fmtTgl(d.tanggal)}</td>
                <td>${d.noBukti}</td>
                <td>${d.namaBarang || d.supplier}</td>
                <td>${d.totalItem}</td>
                <td>${d.totalQty}</td>
                <td>${d.ket || '-'}</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="detailBarangMasuk(${ri})"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-success btn-sm" onclick="cetakBarangMasuk(${ri})"><i class="fa fa-print"></i></button>
                    <button class="btn btn-danger btn-sm" onclick="hapusBarangMasuk(${ri})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>`;
        }).join('')
        : emptyStateRow(8, 'fa-inbox', 'Belum ada transaksi', 'Data barang masuk yang tercatat akan tampil di sini.');

    document.getElementById('main-content').innerHTML = `
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div><h2>Barang Masuk</h2></div>
            <button class="btn btn-primary" onclick="withLoading(loadTambahBarangMasuk)">
                <i class="fa fa-plus"></i> Tambah Barang Masuk
            </button>
        </div>
        <div class="table-card mb-4">
            <div class="row">
                <div class="col-md-3">
                    <label>Tanggal Mulai</label>
                    <input type="date" id="fTglMulai" class="form-control" value="${fTglMulai}">
                </div>
                <div class="col-md-3">
                    <label>Tanggal Selesai</label>
                    <input type="date" id="fTglSelesai" class="form-control" value="${fTglSelesai}">
                </div>
                <div class="col-md-3">
                    <label>Nama Barang</label>
                    <select id="fBarangMasuk" class="form-control">${opsiBarangMasuk(fBarang)}</select>
                </div>
                <div class="col-md-3 d-flex align-items-end gap-2">
                    <button class="btn btn-primary w-100" onclick="
                        loadBarangMasuk(
                            document.getElementById('fTglMulai').value,
                            document.getElementById('fTglSelesai').value,
                            document.getElementById('fBarangMasuk').value
                        )"><i class="fa fa-filter"></i> Filter
                    </button>
                    <button class="btn btn-outline-secondary" onclick="loadBarangMasuk()">
                        <i class="fa fa-rotate-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="table-card">
            <table class="table">
                <thead>
                    <tr><th>No</th><th>Tanggal</th><th>No Bukti</th><th>Nama Barang</th><th>Total Item</th><th>Total Qty</th><th>Keterangan</th><th>Aksi</th></tr>
                </thead>
                <tbody>${rows}</tbody>
            </table>
        </div>`;
}

function loadTambahBarangMasuk() {
    const today   = new Date().toISOString().split('T')[0];
    const urutan  = String(dataBarangMasuk.length + 1).padStart(3, '0');
    const noBukti = 'BM-' + today.replace(/-/g,'').slice(2) + '-' + urutan;

    document.getElementById('main-content').innerHTML = `
        <div class="mb-4"><h2>Tambah Barang Masuk</h2></div>
        <div class="table-card">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-bold">Tanggal <span class="text-danger">*</span></label>
                    <input type="date" id="tglMasuk" class="form-control" value="${today}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-bold">No Bukti</label>
                    <input type="text" id="noBuktiMasuk" class="form-control" value="${noBukti}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-bold">Nama Barang <span class="text-danger">*</span></label>
                    <select id="barangMasuk" class="form-control" onchange="updateStokInfoMasuk()">${opsiBarangMasuk()}</select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-bold">Stok Saat Ini</label>
                    <input type="text" id="stokSaatIniMasuk" class="form-control" value="-" disabled>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-bold">Qty Masuk <span class="text-danger">*</span></label>
                    <input type="number" id="totalQtyMasuk" class="form-control" min="1" value="1">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label fw-bold">&nbsp;</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-bold">Keterangan</label>
                    <textarea id="ketMasuk" class="form-control" rows="3" placeholder="Masukkan keterangan"></textarea>
                </div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-secondary" onclick="withLoading(loadBarangMasuk)"><i class="fa fa-arrow-left"></i> Kembali</button>
                <button class="btn btn-primary" onclick="simpanBarangMasuk()"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>`;
}

function updateStokInfoMasuk() {
    const kode = document.getElementById('barangMasuk').value;
    const b = dataBarang.find(x => x.kode === kode);
    document.getElementById('stokSaatIniMasuk').value = b ? `${b.stok} ${b.satuan || ''}` : '-';
}

function simpanBarangMasuk() {
    const tanggal    = document.getElementById('tglMasuk').value;
    const noBukti    = document.getElementById('noBuktiMasuk').value.trim();
    const kodeBarang = document.getElementById('barangMasuk').value;
    const qty        = parseInt(document.getElementById('totalQtyMasuk').value) || 0;
    const ket        = document.getElementById('ketMasuk').value.trim();

    if (!tanggal || !kodeBarang) { showToast('Tanggal dan Nama Barang wajib diisi!', 'danger'); return; }
    if (qty <= 0) { showToast('Qty Masuk harus lebih dari 0!', 'danger'); return; }

    const b = dataBarang.find(x => x.kode === kodeBarang);
    if (!b) { showToast('Barang tidak ditemukan di Data Barang!', 'danger'); return; }

    // stok otomatis bertambah sesuai qty masuk
    b.stok += qty;

    dataBarangMasuk.push({
        tanggal,
        noBukti,
        kodeBarang: b.kode,
        namaBarang: b.nama,
        supplier: b.nama,
        totalItem: 1,
        totalQty: qty,
        ket
    });

    simpanSemua();
    showToast(`Barang Masuk berhasil disimpan! Stok ${b.nama} sekarang: ${b.stok}`);
    loadBarangMasuk();
}

function detailBarangMasuk(index) {
    const d = dataBarangMasuk[index];
    indexDetailCetak = index;
    document.getElementById('isiModalDetailMasuk').innerHTML = `
        <table class="table table-bordered">
            <tr><th width="35%">Tanggal</th><td>${fmtTgl(d.tanggal)}</td></tr>
            <tr><th>No Bukti</th><td><strong>${d.noBukti}</strong></td></tr>
            <tr><th>Nama Barang</th><td>${d.namaBarang || d.supplier}</td></tr>
            <tr><th>Total Item</th><td>${d.totalItem}</td></tr>
            <tr><th>Total Qty</th><td>${d.totalQty}</td></tr>
            <tr><th>Keterangan</th><td>${d.ket || '-'}</td></tr>
        </table>`;
    document.getElementById('btnCetakDetail').onclick = () => cetakBarangMasuk(index);
    new bootstrap.Modal(document.getElementById('modalDetailMasuk')).show();
}

function cetakBarangMasuk(index) {
    const d = dataBarangMasuk[index];
    const win = window.open('', '_blank');
    win.document.write(`
        <html><head><title>Bukti Barang Masuk</title>
        <style>body{font-family:Arial;padding:30px} table{width:100%;border-collapse:collapse} td,th{border:1px solid #000;padding:8px} h2{text-align:center}</style>
        </head><body>
        <h2>BUKTI BARANG MASUK</h2>
        <h4 style="text-align:center">PABRIK ALUMINIUM</h4>
        <hr>
        <table>
            <tr><th width="35%">Tanggal</th><td>${fmtTgl(d.tanggal)}</td></tr>
            <tr><th>No Bukti</th><td>${d.noBukti}</td></tr>
            <tr><th>Nama Barang</th><td>${d.namaBarang || d.supplier}</td></tr>
            <tr><th>Total Item</th><td>${d.totalItem}</td></tr>
            <tr><th>Total Qty</th><td>${d.totalQty}</td></tr>
            <tr><th>Keterangan</th><td>${d.ket || '-'}</td></tr>
        </table>
        <br><br>
        <div style="text-align:right">
            <p>Medan, ${fmtTgl(d.tanggal)}</p>
            <br><br><br>
            <p>( Admin )</p>
        </div>
        <script>window.onload=()=>{window.print();}<\/script>
        </body></html>`);
}

function hapusBarangMasuk(index) {
    konfirmasiHapus(() => {
        dataBarangMasuk.splice(index, 1);
        simpanSemua();
        showToast('Data berhasil dihapus!', 'danger');
        loadBarangMasuk();
    });
}

// ================================================================
// 5. BARANG KELUAR
// ================================================================
let rowKeluar = 1;

function loadBarangKeluar() {
    setMenu(4);
    rowKeluar = 1;
    const today = new Date().toISOString().split('T')[0];

    const riwayat = dataBarangKeluar.length
        ? dataBarangKeluar.map((d, i) => `
            <tr>
                <td>${i + 1}</td>
                <td>${fmtTgl(d.tanggal)}</td>
                <td>${d.barang}</td>
                <td>${d.jumlah}</td>
                <td>${d.tujuan || '-'}</td>
                <td>${d.ket || '-'}</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="hapusBarangKeluar(${i})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>`).join('')
        : emptyStateRow(7, 'fa-truck-ramp-box', 'Belum ada data keluar', 'Transaksi barang keluar yang tercatat akan tampil di sini.');

    document.getElementById('main-content').innerHTML = `
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div><h2>Barang Keluar</h2></div>
        </div>
        <div class="table-card mb-4">
            <h4 class="mb-4"><i class="fa fa-arrow-up"></i> Form Barang Keluar</h4>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Tanggal Keluar</label>
                    <input type="date" id="tglKeluar" class="form-control" value="${today}">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Tujuan / Penerima</label>
                    <input type="text" id="tujuanKeluar" class="form-control" placeholder="Masukkan tujuan">
                </div>
                <div class="col-md-4 mb-3">
                    <label>No Referensi</label>
                    <input type="text" id="noRefKeluar" class="form-control" placeholder="Masukkan no referensi">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Keterangan</label>
                    <textarea id="ketKeluar" class="form-control" rows="2" placeholder="Masukkan keterangan"></textarea>
                </div>
            </div>
            <h5>Detail Barang</h5>
            <table class="table table-bordered" id="tabelKeluar">
                <thead>
                    <tr><th>No</th><th>Barang</th><th>Satuan</th><th>Stok</th><th>Jumlah Keluar</th><th>Keterangan</th><th>Aksi</th></tr>
                </thead>
                <tbody id="bodyTabelKeluar">
                    <tr id="baris-keluar-1">
                        <td>1</td>
                        <td><select class="form-control sel-barang" onchange="updateInfoBarang(this)">${opsiBarang()}</select></td>
                        <td class="col-satuan">-</td>
                        <td class="col-stok">-</td>
                        <td><input type="number" class="form-control inp-jumlah" min="1" value="1"></td>
                        <td><input type="text" class="form-control inp-ket" placeholder="Keterangan baris"></td>
                        <td><button class="btn btn-danger btn-sm" onclick="hapusBaris(this)"><i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-3">
                <button class="btn btn-outline-primary" onclick="tambahBaris()">
                    <i class="fa fa-plus"></i> Tambah Item
                </button>
            </div>
            <div class="text-end mt-4 d-flex gap-2 justify-content-end">
                <button class="btn btn-secondary" onclick="withLoading(loadBarangKeluar)">Batal</button>
                <button class="btn btn-primary" onclick="simpanBarangKeluar()">Simpan</button>
            </div>
        </div>
        <div class="table-card">
            <h5 class="mb-3"><i class="fa fa-history me-2"></i>Riwayat Barang Keluar</h5>
            <table class="table table-bordered">
                <thead>
                    <tr><th>No</th><th>Tanggal</th><th>Barang</th><th>Jumlah</th><th>Tujuan</th><th>Keterangan</th><th>Aksi</th></tr>
                </thead>
                <tbody>${riwayat}</tbody>
            </table>
        </div>`;
}

function tambahBaris() {
    rowKeluar++;
    const tr = document.createElement('tr');
    tr.id = 'baris-keluar-' + rowKeluar;
    tr.innerHTML = `
        <td>${rowKeluar}</td>
        <td><select class="form-control sel-barang" onchange="updateInfoBarang(this)">${opsiBarang()}</select></td>
        <td class="col-satuan">-</td>
        <td class="col-stok">-</td>
        <td><input type="number" class="form-control inp-jumlah" min="1" value="1"></td>
        <td><input type="text" class="form-control inp-ket" placeholder="Keterangan baris"></td>
        <td><button class="btn btn-danger btn-sm" onclick="hapusBaris(this)"><i class="fa fa-trash"></i></button></td>`;
    document.getElementById('bodyTabelKeluar').appendChild(tr);
}

function hapusBaris(btn) {
    const tbody = document.getElementById('bodyTabelKeluar');
    if (tbody.children.length <= 1) { showToast('Minimal harus ada 1 item!', 'warning'); return; }
    btn.closest('tr').remove();
}

function updateInfoBarang(sel) {
    const kode = sel.value;
    const b    = dataBarang.find(x => x.kode === kode);
    const tr   = sel.closest('tr');
    tr.querySelector('.col-satuan').textContent = b ? b.satuan : '-';
    tr.querySelector('.col-stok').textContent   = b ? b.stok   : '-';
}

function simpanBarangKeluar() {
    const tanggal = document.getElementById('tglKeluar').value;
    const tujuan  = document.getElementById('tujuanKeluar').value.trim();
    const noRef   = document.getElementById('noRefKeluar').value.trim();
    const ketU    = document.getElementById('ketKeluar').value.trim();

    if (!tanggal) { showToast('Tanggal wajib diisi!', 'danger'); return; }

    const baris = document.querySelectorAll('#bodyTabelKeluar tr');
    let ada = false;

    for (const tr of baris) {
        const kode   = tr.querySelector('.sel-barang').value;
        const jumlah = parseInt(tr.querySelector('.inp-jumlah').value) || 0;
        const ket    = tr.querySelector('.inp-ket').value.trim();

        if (!kode) continue;
        const b = dataBarang.find(x => x.kode === kode);
        if (!b) continue;
        if (jumlah <= 0) { showToast('Jumlah keluar harus lebih dari 0!', 'danger'); return; }
        if (jumlah > b.stok) { showToast(`Stok ${b.nama} tidak cukup! Stok tersisa: ${b.stok}`, 'danger'); return; }

        b.stok -= jumlah;
        dataBarangKeluar.push({ tanggal, barang: b.nama, kodeBarang: b.kode, jumlah, tujuan, ket: ketU || ket, noRef });
        ada = true;
    }

    if (!ada) { showToast('Pilih barang terlebih dahulu!', 'warning'); return; }

    simpanSemua();
    showToast('Barang Keluar berhasil disimpan!');
    loadBarangKeluar();
}

function hapusBarangKeluar(index) {
    konfirmasiHapus(() => {
        dataBarangKeluar.splice(index, 1);
        simpanSemua();
        showToast('Data berhasil dihapus!', 'danger');
        loadBarangKeluar();
    });
}

// ================================================================
// 6. STOK BARANG  (dengan progress bar level stok)
// ================================================================
function loadStokBarang(fNama = '', fKat = '', fSat = '', fStatus = '') {
    setMenu(5);

    let list = [...dataBarang];
    if (fNama)   list = list.filter(b => b.nama.toLowerCase().includes(fNama.toLowerCase()) || b.kode.toLowerCase().includes(fNama.toLowerCase()));
    if (fKat)    list = list.filter(b => b.jenis === fKat);
    if (fSat)    list = list.filter(b => b.satuan === fSat);
    if (fStatus) {
        if (fStatus === 'Aman')         list = list.filter(b => b.stok > 25);
        if (fStatus === 'Stok Rendah')  list = list.filter(b => b.stok > 5 && b.stok <= 25);
        if (fStatus === 'Hampir Habis') list = list.filter(b => b.stok <= 5);
    }

    const maxStok = Math.max(...dataBarang.map(b => b.stok), 50);

    const rows = list.map((b, i) => `
        <tr>
            <td>${i + 1}</td>
            <td>${b.kode}</td>
            <td>${b.nama}</td>
            <td>${b.jenis}</td>
            <td>${b.satuan}</td>
            <td>${stockProgressBar(b.stok, maxStok)}</td>
            <td>${badgeStatus(b.stok)}</td>
            <td>
                <button class="btn btn-primary btn-sm" onclick="detailStokBarang('${b.kode}')">
                    <i class="fa fa-eye"></i>
                </button>
            </td>
        </tr>`).join('') || emptyStateRow(8, 'fa-boxes-packing', 'Tidak ada data', 'Ubah filter untuk melihat data stok lainnya.');

    const opsiKat = ['Hollow','Plat','Profil','Siku','Pipa']
        .map(k => `<option ${fKat===k?'selected':''}>${k}</option>`).join('');
    const opsiSat = ['Batang','Lembar']
        .map(s => `<option ${fSat===s?'selected':''}>${s}</option>`).join('');
    const opsiStatus = ['Aman','Stok Rendah','Hampir Habis']
        .map(s => `<option ${fStatus===s?'selected':''}>${s}</option>`).join('');

    document.getElementById('main-content').innerHTML = `
        <h2 class="mb-3">Stok Barang</h2>
        <div class="table-card mb-4">
            <div class="row align-items-end">
                <div class="col-md-3">
                    <input type="text" id="fStokNama" class="form-control" placeholder="Cari barang..." value="${fNama}">
                </div>
                <div class="col-md-2">
                    <label>Kategori</label>
                    <select id="fStokKat" class="form-control">
                        <option value="">Semua Kategori</option>${opsiKat}
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Satuan</label>
                    <select id="fStokSat" class="form-control">
                        <option value="">Semua Satuan</option>${opsiSat}
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Stok</label>
                    <select id="fStokStatus" class="form-control">
                        <option value="">Semua Stok</option>${opsiStatus}
                    </select>
                </div>
                <div class="col-md-3 text-end d-flex gap-2 justify-content-end">
                    <button class="btn btn-primary" onclick="
                        loadStokBarang(
                            document.getElementById('fStokNama').value,
                            document.getElementById('fStokKat').value,
                            document.getElementById('fStokSat').value,
                            document.getElementById('fStokStatus').value
                        )"><i class="fa fa-filter"></i> Filter
                    </button>
                    <button class="btn btn-outline-secondary" onclick="loadStokBarang()">
                        <i class="fa fa-rotate-right"></i> Reset
                    </button>
                </div>
            </div>
        </div>
        <div class="table-card">
            <table class="table table-hover align-middle">
                <thead>
                    <tr><th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Kategori</th><th>Satuan</th><th>Level Stok</th><th>Status</th><th>Aksi</th></tr>
                </thead>
                <tbody>${rows}</tbody>
            </table>
            <div class="d-flex justify-content-between mt-3">
                <span class="text-muted">Menampilkan ${list.length} dari ${dataBarang.length} data</span>
            </div>
        </div>`;
}

function detailStokBarang(kode) {
    const b = dataBarang.find(x => x.kode === kode);
    if (!b) return;
    const totalKeluar = dataBarangKeluar.filter(d => d.kodeBarang === kode).reduce((s, d) => s + Number(d.jumlah), 0);
    document.getElementById('isiModalDetailStok').innerHTML = `
        <table class="table table-bordered">
            <tr><th width="40%">Kode Barang</th><td>${b.kode}</td></tr>
            <tr><th>Nama Barang</th><td><strong>${b.nama}</strong></td></tr>
            <tr><th>Jenis / Kategori</th><td>${b.jenis || '-'}</td></tr>
            <tr><th>Satuan</th><td>${b.satuan || '-'}</td></tr>
            <tr><th>Harga</th><td>${b.harga || '-'}</td></tr>
            <tr><th>Stok Saat Ini</th><td>${stockProgressBar(b.stok, Math.max(...dataBarang.map(x=>x.stok),50))}</td></tr>
            <tr><th>Total Keluar</th><td>${totalKeluar}</td></tr>
            <tr><th>Status</th><td>${badgeStatus(b.stok)}</td></tr>
        </table>`;
    new bootstrap.Modal(document.getElementById('modalDetailStok')).show();
}

// ================================================================
// 7. LAPORAN  (dengan Export PDF, Excel, dan Print)
// ================================================================
function loadLaporan() {
    setMenu(6);
    document.getElementById('main-content').innerHTML = `
        <div class="container-fluid">
            <h2 class="mb-3 fw-bold">Laporan</h2>
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Jenis Laporan</label>
                            <select id="jenisLaporan" class="form-control" onchange="tampilLaporan()">
                                <option value="masuk">Laporan Barang Masuk</option>
                                <option value="keluar">Laporan Barang Keluar</option>
                                <option value="stok">Laporan Stok Barang</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Tanggal Awal</label>
                            <input type="date" id="lTglAwal" class="form-control" onchange="tampilLaporan()">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Tanggal Akhir</label>
                            <input type="date" id="lTglAkhir" class="form-control" onchange="tampilLaporan()">
                        </div>
                        <div class="col-md-5 d-flex align-items-end gap-2 flex-wrap no-print">
                            <button class="btn btn-primary" onclick="tampilLaporan()">
                                <i class="fa fa-search"></i> Tampilkan
                            </button>
                            <button class="btn btn-success" onclick="exportCSV()">
                                <i class="fa fa-file-excel"></i> Excel
                            </button>
                            <button class="btn btn-danger" onclick="exportPDF()">
                                <i class="fa fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn btn-outline-secondary" onclick="cetakLaporan()">
                                <i class="fa fa-print"></i> Print
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hasilLaporan"></div>
        </div>`;
    tampilLaporan();
}

function tampilLaporan() {
    const jenis    = document.getElementById('jenisLaporan').value;
    const tglAwal  = document.getElementById('lTglAwal').value;
    const tglAkhir = document.getElementById('lTglAkhir').value;

    if (jenis === 'masuk') {
        let data = [...dataBarangMasuk];
        if (tglAwal)  data = data.filter(d => d.tanggal >= tglAwal);
        if (tglAkhir) data = data.filter(d => d.tanggal <= tglAkhir);
        const totalTrx  = data.length;
        const totalItem = data.reduce((s, d) => s + Number(d.totalItem), 0);
        const totalQty  = data.reduce((s, d) => s + Number(d.totalQty), 0);
        const rows = data.map((d, i) => `
            <tr><td>${i+1}</td><td>${fmtTgl(d.tanggal)}</td><td>${d.noBukti}</td><td>${d.namaBarang || d.supplier}</td><td>${d.totalItem}</td><td>${d.totalQty}</td><td>${d.ket||'-'}</td></tr>`).join('')
            || emptyStateRow(7,'fa-file-circle-xmark','Tidak ada data','Coba ubah rentang tanggal laporan.');
        document.getElementById('hasilLaporan').innerHTML = `
            <div class="row mb-4">
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>TOTAL TRANSAKSI</h6><h2>${totalTrx}</h2><small>Transaksi</small></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>TOTAL ITEM</h6><h2>${totalItem}</h2><small>Item</small></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>TOTAL QTY</h6><h2>${totalQty}</h2><small>Satuan</small></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>PERIODE</h6><h5>${tglAwal?fmtTgl(tglAwal):'Semua'} - ${tglAkhir?fmtTgl(tglAkhir):'Semua'}</h5></div></div></div>
            </div>
            <div class="card shadow-sm border-0 mt-2" id="laporanCetakArea">
                <div class="card-header bg-white fw-bold">LAPORAN BARANG MASUK</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead><tr><th>No</th><th>Tanggal</th><th>No. Bukti</th><th>Nama Barang</th><th>Total Item</th><th>Total Qty</th><th>Keterangan</th></tr></thead>
                        <tbody>${rows}</tbody>
                    </table>
                </div>
            </div>`;

    } else if (jenis === 'keluar') {
        let data = [...dataBarangKeluar];
        if (tglAwal)  data = data.filter(d => d.tanggal >= tglAwal);
        if (tglAkhir) data = data.filter(d => d.tanggal <= tglAkhir);
        const totalTrx = data.length;
        const totalQty = data.reduce((s, d) => s + Number(d.jumlah), 0);
        const rows = data.map((d, i) => `
            <tr><td>${i+1}</td><td>${fmtTgl(d.tanggal)}</td><td>${d.barang}</td><td>${d.jumlah}</td><td>${d.tujuan||'-'}</td><td>${d.ket||'-'}</td></tr>`).join('')
            || emptyStateRow(6,'fa-file-circle-xmark','Tidak ada data','Coba ubah rentang tanggal laporan.');
        document.getElementById('hasilLaporan').innerHTML = `
            <div class="row mb-4">
                <div class="col-md-4"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>TOTAL TRANSAKSI</h6><h2>${totalTrx}</h2><small>Transaksi</small></div></div></div>
                <div class="col-md-4"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>TOTAL QTY KELUAR</h6><h2>${totalQty}</h2><small>Satuan</small></div></div></div>
                <div class="col-md-4"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>PERIODE</h6><h5>${tglAwal?fmtTgl(tglAwal):'Semua'} - ${tglAkhir?fmtTgl(tglAkhir):'Semua'}</h5></div></div></div>
            </div>
            <div class="card shadow-sm border-0 mt-2" id="laporanCetakArea">
                <div class="card-header bg-white fw-bold">LAPORAN BARANG KELUAR</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead><tr><th>No</th><th>Tanggal</th><th>Barang</th><th>Jumlah</th><th>Tujuan</th><th>Keterangan</th></tr></thead>
                        <tbody>${rows}</tbody>
                    </table>
                </div>
            </div>`;

    } else {
        const rows = dataBarang.map((b, i) => `
            <tr><td>${i+1}</td><td>${b.kode}</td><td>${b.nama}</td><td>${b.jenis}</td><td>${b.satuan}</td><td><strong>${b.stok}</strong></td><td>${badgeStatus(b.stok)}</td></tr>`).join('');
        const stokAman    = dataBarang.filter(b => b.stok > 25).length;
        const stokRendah  = dataBarang.filter(b => b.stok > 5 && b.stok <= 25).length;
        const hampirHabis = dataBarang.filter(b => b.stok <= 5).length;
        document.getElementById('hasilLaporan').innerHTML = `
            <div class="row mb-4">
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>TOTAL JENIS BARANG</h6><h2>${dataBarang.length}</h2></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>STOK AMAN</h6><h2 class="text-success">${stokAman}</h2></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>STOK RENDAH</h6><h2 class="text-warning">${stokRendah}</h2></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm border-0"><div class="card-body text-center"><h6>HAMPIR HABIS</h6><h2 class="text-danger">${hampirHabis}</h2></div></div></div>
            </div>
            <div class="card shadow-sm border-0 mt-2" id="laporanCetakArea">
                <div class="card-header bg-white fw-bold">LAPORAN STOK BARANG</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead><tr><th>No</th><th>Kode</th><th>Nama Barang</th><th>Jenis</th><th>Satuan</th><th>Stok</th><th>Status</th></tr></thead>
                        <tbody>${rows}</tbody>
                    </table>
                </div>
            </div>`;
    }
}

function exportCSV() {
    const jenis    = document.getElementById('jenisLaporan').value;
    const tglAwal  = document.getElementById('lTglAwal').value;
    const tglAkhir = document.getElementById('lTglAkhir').value;
    let rowsArr = [], nama = '';

    if (jenis === 'masuk') {
        let data = [...dataBarangMasuk];
        if (tglAwal)  data = data.filter(d => d.tanggal >= tglAwal);
        if (tglAkhir) data = data.filter(d => d.tanggal <= tglAkhir);
        rowsArr.push(['No','Tanggal','No Bukti','Nama Barang','Total Item','Total Qty','Keterangan']);
        data.forEach((d,i)=>rowsArr.push([i+1, fmtTgl(d.tanggal), d.noBukti, (d.namaBarang || d.supplier), d.totalItem, d.totalQty, d.ket||'']));
        nama = 'laporan_barang_masuk';
    } else if (jenis === 'keluar') {
        let data = [...dataBarangKeluar];
        if (tglAwal)  data = data.filter(d => d.tanggal >= tglAwal);
        if (tglAkhir) data = data.filter(d => d.tanggal <= tglAkhir);
        rowsArr.push(['No','Tanggal','Barang','Jumlah','Tujuan','Keterangan']);
        data.forEach((d,i)=>rowsArr.push([i+1, fmtTgl(d.tanggal), d.barang, d.jumlah, d.tujuan||'', d.ket||'']));
        nama = 'laporan_barang_keluar';
    } else {
        rowsArr.push(['No','Kode','Nama Barang','Jenis','Satuan','Stok','Status']);
        dataBarang.forEach((b,i)=>{
            const s = b.stok <= 5 ? 'Hampir Habis' : b.stok <= 25 ? 'Stok Rendah' : 'Aman';
            rowsArr.push([i+1, b.kode, b.nama, b.jenis, b.satuan, b.stok, s]);
        });
        nama = 'laporan_stok_barang';
    }

    try {
        const ws = XLSX.utils.aoa_to_sheet(rowsArr);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Laporan');
        XLSX.writeFile(wb, nama + '_' + new Date().toISOString().split('T')[0] + '.xlsx');
    } catch (e) {
        // fallback CSV bila SheetJS gagal dimuat
        const csv = rowsArr.map(r => r.map(v => `"${String(v).replace(/"/g,'""')}"`).join(',')).join('\n');
        const blob = new Blob(['\uFEFF' + csv], { type: 'text/csv;charset=utf-8;' });
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = nama + '_' + new Date().toISOString().split('T')[0] + '.csv';
        a.click();
    }
    showToast('File Excel berhasil diexport!');
}

function exportPDF() {
    try {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        const jenis = document.getElementById('jenisLaporan').value;
        const judul = jenis === 'masuk' ? 'LAPORAN BARANG MASUK' : jenis === 'keluar' ? 'LAPORAN BARANG KELUAR' : 'LAPORAN STOK BARANG';

        doc.setFontSize(14); doc.text(judul, 14, 16);
        doc.setFontSize(10); doc.setTextColor(100); doc.text('PABRIK ALUMINIUM', 14, 22);

        const table = document.querySelector('#laporanCetakArea table');
        doc.autoTable({ html: table, startY: 28, styles: { fontSize: 8 }, headStyles: { fillColor: [37,99,235] } });
        doc.save((jenis||'laporan') + '_' + new Date().toISOString().split('T')[0] + '.pdf');
        showToast('File PDF berhasil diexport!');
    } catch (e) {
        showToast('Gagal membuat PDF, silakan coba lagi.', 'danger');
    }
}

function cetakLaporan() {
    window.print();
}

// ================================================================
// INISIALISASI
// ================================================================
if (isAuthenticated()) {
    enterApp();
} else {
    document.getElementById('appShell').style.display = 'none';
}
</script>

</body>
</html>