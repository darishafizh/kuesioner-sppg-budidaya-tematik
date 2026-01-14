// ===== Data Storage Keys =====
const STORAGE_KEYS = { 
    formA: 'kuesioner_a', formB: 'kuesioner_b', formC: 'kuesioner_c', formD: 'kuesioner_d',
    masyA: 'masyarakat_a', masyB: 'masyarakat_b', masyC: 'masyarakat_c', masyD: 'masyarakat_d',
    sppgA: 'sppg_a', sppgB: 'sppg_b', sppgC: 'sppg_c', sppgD: 'sppg_d'
};

// ===== Dummy Data =====
const DUMMY_DATA = {
    formA: [
        { id: 1, verifikator: 'Ahmad Rifai', tempat_tanggal: 'Banda Aceh, 15/12/2024 09:00', responden: 'Budi Santoso', jk: 'Laki-laki', umur: 45, pendidikan: 'S1', pekerjaan: 'Ketua Koperasi', alamat: 'Jl. Nelayan No. 10', koperasi: 'Koperasi Mina Jaya', badan_hukum: 'AHU-001234', desa: 'Lampulo', kecamatan: 'Kuta Alam', kabkota: 'Kota Banda Aceh', provinsi: 'Aceh', luas: 1200, paket: 2, komoditas: 'Lele', koordinat: '5.5483, 95.3238', kriteria: [true, true, true, true, true, true, true, false], kbli: '03221', hari_pelatihan: 5, hambatan: ['Modal', 'Pasar'], catatan: 'Lokasi strategis', rekomendasi: 'Layak dilanjutkan' },
        { id: 2, verifikator: 'Siti Rahayu', tempat_tanggal: 'Medan, 16/12/2024 10:30', responden: 'Joko Widodo', jk: 'Laki-laki', umur: 52, pendidikan: 'SMA', pekerjaan: 'Sekretaris', alamat: 'Jl. Ikan Mas No. 5', koperasi: 'Koperasi Nelayan Mandiri', badan_hukum: 'AHU-005678', desa: 'Belawan', kecamatan: 'Medan Belawan', kabkota: 'Kota Medan', provinsi: 'Sumatera Utara', luas: 900, paket: 1, komoditas: 'Nila', koordinat: '3.7857, 98.6820', kriteria: [true, true, false, true, true, true, true, true], kbli: '03221', hari_pelatihan: 3, hambatan: ['SDM'], catatan: '-', rekomendasi: 'Perlu pelatihan tambahan' },
        { id: 3, verifikator: 'Dewi Lestari', tempat_tanggal: 'Padang, 17/12/2024 08:00', responden: 'Rina Marlina', jk: 'Perempuan', umur: 38, pendidikan: 'D3', pekerjaan: 'Bendahara', alamat: 'Jl. Patin Raya No. 15', koperasi: 'Koperasi Bahari Sejahtera', badan_hukum: 'AHU-009012', desa: 'Pasir Jambak', kecamatan: 'Koto Tangah', kabkota: 'Kota Padang', provinsi: 'Sumatera Barat', luas: 1500, paket: 2, komoditas: 'Lele', koordinat: '-0.9471, 100.4172', kriteria: [true, true, true, true, true, true, true, true], kbli: '03221', hari_pelatihan: 7, hambatan: [], catatan: 'Koperasi sangat aktif', rekomendasi: 'Sangat layak' }
    ],
    formB: [
        { id: 1, verifikator: 'Ahmad Rifai', tempat_tanggal: 'Banda Aceh, 15/12/2024 11:00', responden: 'Pak Lurah Lampulo', jk: 'Laki-laki', umur: 50, pendidikan: 'S1', pekerjaan: 'Lurah', alamat: 'Kantor Kelurahan Lampulo', jml_pembudidaya: 150, jml_pokdakan: 8, komoditas_terbanyak: 'Lele, Nila', jml_produksi: 5000, konsumsi: 35, ikan_pasar: 'Lele, Bandeng, Tongkol', catatan: 'Potensi budidaya tinggi' },
        { id: 2, verifikator: 'Siti Rahayu', tempat_tanggal: 'Medan, 16/12/2024 14:00', responden: 'Camat Medan Belawan', jk: 'Laki-laki', umur: 48, pendidikan: 'S2', pekerjaan: 'Camat', alamat: 'Kantor Kecamatan', jml_pembudidaya: 200, jml_pokdakan: 12, komoditas_terbanyak: 'Nila', jml_produksi: 8000, konsumsi: 40, ikan_pasar: 'Nila, Mujair, Lele', catatan: 'Akses pasar mudah' }
    ],
    formC: [
        { id: 1, verifikator: 'Ahmad Rifai', tempat_tanggal: 'Banda Aceh, 15/12/2024 14:00', responden: 'Budi Santoso', koordinat: '5.5483, 95.3238', jk: 'Laki-laki', umur: 45, lahan: [true, true, true, true, true, true, false], instalasi: [true, true, true, false, false, true, true, false], prog1: 85, prog2: 90, prog3: 70, prog4: 75, prog5: 60, tk_laki: 8, tk_perempuan: 2, upah: 150000, jam_kerja: 8, tk_lokal: 7, tk_luar: 3, kendala: ['Cuaca', 'Material'], sop: 'Sudah', sop_kendala: '' },
        { id: 2, verifikator: 'Siti Rahayu', tempat_tanggal: 'Medan, 16/12/2024 15:00', responden: 'Joko Widodo', koordinat: '3.7857, 98.6820', jk: 'Laki-laki', umur: 52, lahan: [true, true, true, true, true, false, false], instalasi: [true, false, true, true, false, true, true, false], prog1: 60, prog2: 55, prog3: 80, prog4: 70, prog5: 50, tk_laki: 6, tk_perempuan: 1, upah: 120000, jam_kerja: 7, tk_lokal: 5, tk_luar: 2, kendala: ['Tenaga Kerja', 'Listrik'], sop: 'Belum', sop_kendala: 'Belum ada template' },
        { id: 3, verifikator: 'Dewi Lestari', tempat_tanggal: 'Padang, 17/12/2024 13:00', responden: 'Rina Marlina', koordinat: '-0.9471, 100.4172', jk: 'Perempuan', umur: 38, lahan: [true, true, true, true, true, true, true], instalasi: [true, true, true, true, true, true, true, true], prog1: 95, prog2: 100, prog3: 90, prog4: 95, prog5: 85, tk_laki: 10, tk_perempuan: 3, upah: 175000, jam_kerja: 8, tk_lokal: 10, tk_luar: 3, kendala: [], sop: 'Sudah', sop_kendala: '' }
    ],
    formD: [
        { id: 1, responden: 'Budi Santoso', koperasi: 'Koperasi Mina Jaya', tujuan: ['Pasar/Eceran', 'SPPG'], tujuan_lain: '', pj_operasional: 'Ketua', modal: 'Ya', strategi: 'Dukungan Koperasi', kendala_pemasaran: 'Harga tidak stabil', antisipasi: 'Kontrak dengan SPPG' },
        { id: 2, responden: 'Joko Widodo', koperasi: 'Koperasi Nelayan Mandiri', tujuan: ['Tengkulak', 'Pengepul'], tujuan_lain: '', pj_operasional: 'Pengurus', modal: 'Belum', strategi: 'Pinjaman', kendala_pemasaran: 'Jarak ke pasar jauh', antisipasi: 'Kerjasama dengan pengepul lokal' },
        { id: 3, responden: 'Rina Marlina', koperasi: 'Koperasi Bahari Sejahtera', tujuan: ['Koperasi', 'Pedagang Besar', 'SPPG'], tujuan_lain: 'Restoran', pj_operasional: 'Tenaga Khusus', modal: 'Ya', strategi: 'Diversifikasi', kendala_pemasaran: 'Persaingan harga', antisipasi: 'Diferensiasi kualitas produk' }
    ],
    masyA: [
        { id: 1, verifikator: 'Ahmad Rifai', tempat_tanggal: 'Banda Aceh, 15/12/2024', responden: 'Ibu Siti', jk: 'Perempuan', umur: 42, pendidikan: 'SMA', pekerjaan: 'Ibu Rumah Tangga', alamat: 'Desa Lampulo', koordinat: '5.5483, 95.3238', sesuai_kebutuhan: 'Ya, sesuai', tidak_sesuai: '', senang: 'Senang', alasan: 'Membuka lapangan kerja', harapan: 'Produksi ikan meningkat', saran: 'Libatkan warga sekitar' },
        { id: 2, verifikator: 'Siti Rahayu', tempat_tanggal: 'Medan, 16/12/2024', responden: 'Pak Hasan', jk: 'Laki-laki', umur: 55, pendidikan: 'SMP', pekerjaan: 'Petani', alamat: 'Desa Belawan', koordinat: '3.7857, 98.6820', sesuai_kebutuhan: 'Ya, sesuai', tidak_sesuai: '', senang: 'Biasa saja', alasan: 'Masih menunggu hasil', harapan: 'Harga ikan stabil', saran: 'Koordinasi dengan warga' }
    ],
    masyB: [
        { id: 1, responden: 'Ibu Siti', q1: 4, q2: 4, q3: 5, q4: 4, q5: 4, q6: 5, q7: 5, q8: 4, q9: 5, q10: 5, q11: 5, q12: 5, q13: 5, q14: 4, q15: 5 },
        { id: 2, responden: 'Pak Hasan', q1: 3, q2: 3, q3: 4, q4: 3, q5: 4, q6: 4, q7: 4, q8: 4, q9: 4, q10: 4, q11: 4, q12: 4, q13: 4, q14: 3, q15: 4 }
    ],
    masyC: [],
    masyD: [],
    sppgA: [
        { id: 1, verifikator: 'Ahmad Rifai', tempat_tanggal: 'Banda Aceh, 18/12/2024', responden: 'Kepala SPPG Aceh', nama_sppg: 'SPPG Kota Banda Aceh', kabkota: 'Kota Banda Aceh', jml_sekolah: 25, jml_siswa: 5000, porsi_harian: 4500, porsi_bulanan: 99000, kebutuhan_lele: 1500, kebutuhan_nila: 1000, kebutuhan_lain: 500, frekuensi: 3, anggaran_porsi: 18000, terpenuhi: 'Belum', kekurangan: 800 },
        { id: 2, verifikator: 'Siti Rahayu', tempat_tanggal: 'Medan, 19/12/2024', responden: 'Koordinator MBG', nama_sppg: 'SPPG Kota Medan', kabkota: 'Kota Medan', jml_sekolah: 40, jml_siswa: 12000, porsi_harian: 11000, porsi_bulanan: 242000, kebutuhan_lele: 3000, kebutuhan_nila: 2500, kebutuhan_lain: 1000, frekuensi: 4, anggaran_porsi: 20000, terpenuhi: 'Ya', kekurangan: 0 }
    ],
    sppgB: [],
    sppgC: [],
    sppgD: [
        { id: 1, nama_sppg: 'SPPG Kota Banda Aceh', kendala: ['Ketersediaan', 'Logistik'], kendala_lain: '', minat: 'Ya, sangat berminat', alasan: 'Kebutuhan ikan lokal tinggi', volume: 2000, jenis: 'Lele, Nila', kontrak: 'Dalam Proses', target: 'Kontrak 50 ton/tahun dengan 3 KDMP' },
        { id: 2, nama_sppg: 'SPPG Kota Medan', kendala: ['Harga', 'Kualitas'], kendala_lain: 'Transportasi mahal', minat: 'Ya, berminat', alasan: 'Diversifikasi supplier', volume: 5000, jenis: 'Lele, Nila, Patin', kontrak: 'Ada', target: 'Perluas kerjasama ke 5 KDMP baru' }
    ]
};

let charts = { komoditas: null, progres: null, hambatan: null, instalasi: null };

// ===== Authentication =====
const USERS_KEY = 'app_users';
const SESSION_KEY = 'auth_session';
let currentUserRole = null;

// Simple hash function (not cryptographically secure, but OK for client-side demo)
function simpleHash(str) {
    let hash = 0;
    for (let i = 0; i < str.length; i++) {
        const char = str.charCodeAt(i);
        hash = ((hash << 5) - hash) + char;
        hash = hash & hash;
    }
    return hash.toString(36);
}

// Get all users
function getUsers() {
    return JSON.parse(localStorage.getItem(USERS_KEY) || '[]');
}

// Save users
function saveUsers(users) {
    localStorage.setItem(USERS_KEY, JSON.stringify(users));
}

// Initialize default users if not set
function initializeCredentials() {
    if (!localStorage.getItem(USERS_KEY) || getUsers().length === 0) {
        const defaultUsers = [
            { id: 1, username: 'admin', name: 'Administrator', passwordHash: simpleHash('P@ssw0rd'), role: 'admin' },
            { id: 2, username: 'verifikator1', name: 'Verifikator Sumut', passwordHash: simpleHash('verif123'), role: 'verifikator' },
            { id: 3, username: 'verifikator2', name: 'Verifikator Sumbar', passwordHash: simpleHash('verif456'), role: 'verifikator' },
            { id: 4, username: 'verifikator3', name: 'Verifikator Aceh', passwordHash: simpleHash('verif789'), role: 'verifikator' }
        ];
        saveUsers(defaultUsers);
    }
}

// Check if user is logged in
function checkAuth() {
    const session = sessionStorage.getItem(SESSION_KEY);
    if (session) {
        const { username, role, expiry } = JSON.parse(session);
        if (new Date().getTime() < expiry) {
            currentUserRole = role;
            showApp(username, role);
            return true;
        }
        sessionStorage.removeItem(SESSION_KEY);
    }
    showLogin();
    return false;
}

// Show login screen
function showLogin() {
    document.getElementById('loginOverlay').classList.remove('hidden');
}

// Show main app with role-based access
function showApp(username, role) {
    document.getElementById('loginOverlay').classList.add('hidden');
    document.getElementById('currentUser').textContent = username;
    document.getElementById('currentUserRole').textContent = role;
    currentUserRole = role;
    
    // Apply role-based visibility
    applyRoleBasedAccess(role);
}

// Apply role-based access control
function applyRoleBasedAccess(role) {
    const menuUserManagement = document.getElementById('menuUserManagement');
    
    if (role === 'admin') {
        // Admin: show user management, hide questionnaire forms
        menuUserManagement?.classList.add('visible');
        
        // Hide all form input sections for admin (only view cards)
        document.querySelectorAll('.form-container').forEach(form => {
            form.classList.add('verifikator-hidden');
        });
        document.querySelectorAll('.verifikator-card').forEach(card => {
            card.classList.add('verifikator-hidden');
        });
        document.querySelectorAll('.tab-nav').forEach(nav => {
            nav.classList.add('verifikator-hidden');
        });
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('verifikator-hidden');
        });
        
    } else {
        // Verifikator: hide user management, show forms
        menuUserManagement?.classList.remove('visible');
        
        // Show all form sections
        document.querySelectorAll('.form-container').forEach(form => {
            form.classList.remove('verifikator-hidden');
        });
        document.querySelectorAll('.verifikator-card').forEach(card => {
            card.classList.remove('verifikator-hidden');
        });
        document.querySelectorAll('.tab-nav').forEach(nav => {
            nav.classList.remove('verifikator-hidden');
        });
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.remove('verifikator-hidden');
        });
    }
    
    // Render user table if admin
    if (role === 'admin') {
        renderUserTable();
    }
}

// Login function
function login(username, password) {
    const users = getUsers();
    const inputHash = simpleHash(password);
    
    const user = users.find(u => u.username === username && u.passwordHash === inputHash);
    
    if (user) {
        // Create session (valid for 8 hours)
        const session = {
            userId: user.id,
            username: user.username,
            name: user.name,
            role: user.role,
            expiry: new Date().getTime() + (8 * 60 * 60 * 1000)
        };
        sessionStorage.setItem(SESSION_KEY, JSON.stringify(session));
        showApp(user.name, user.role);
        
        // Always redirect to dashboard on login
        redirectToDashboard();
        
        return true;
    }
    return false;
}

// Redirect to dashboard
function redirectToDashboard() {
    // Remove active from all nav links and pages
    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    
    // Set dashboard as active
    document.querySelector('.nav-link[data-page="dashboard"]')?.classList.add('active');
    document.getElementById('dashboard')?.classList.add('active');
}

// Logout function
function logout() {
    if (confirm('Yakin ingin logout?')) {
        sessionStorage.removeItem(SESSION_KEY);
        currentUserRole = null;
        showLogin();
        showToast('👋 Berhasil logout!');
    }
}

// Toggle password visibility
function togglePassword() {
    const input = document.getElementById('loginPassword');
    const btn = input.nextElementSibling;
    if (input.type === 'password') {
        input.type = 'text';
        btn.textContent = '🙈';
    } else {
        input.type = 'password';
        btn.textContent = '👁️';
    }
}

// Toggle user management password visibility
function toggleUserPassword() {
    const input = document.getElementById('userPassword');
    const btn = input.nextElementSibling;
    if (input.type === 'password') {
        input.type = 'text';
        btn.textContent = '🙈';
    } else {
        input.type = 'password';
        btn.textContent = '👁️';
    }
}

// ===== User Management CRUD =====
function renderUserTable() {
    const tbody = document.getElementById('userTableBody');
    if (!tbody) return;
    
    const users = getUsers();
    tbody.innerHTML = users.map(user => `
        <tr>
            <td>${user.id}</td>
            <td>${user.username}</td>
            <td>${user.name}</td>
            <td><span class="role-badge ${user.role}">${user.role}</span></td>
            <td>
                <div class="action-btns">
                    <button class="btn-edit" onclick="editUser(${user.id})">✏️ Edit</button>
                    ${user.id !== 1 ? `<button class="btn-delete" onclick="deleteUser(${user.id})">🗑️ Hapus</button>` : ''}
                </div>
            </td>
        </tr>
    `).join('');
}

function editUser(id) {
    const users = getUsers();
    const user = users.find(u => u.id === id);
    if (!user) return;
    
    document.getElementById('editUserId').value = id;
    document.getElementById('userUsername').value = user.username;
    document.getElementById('userName').value = user.name;
    document.getElementById('userPassword').value = '';
    document.getElementById('userRole').value = user.role;
    
    document.getElementById('userFormTitle').textContent = '✏️ Edit User';
    document.getElementById('passwordHint').classList.add('visible');
    
    // Scroll to form
    document.querySelector('.user-form-card').scrollIntoView({ behavior: 'smooth' });
}

function cancelEditUser() {
    document.getElementById('userForm').reset();
    document.getElementById('editUserId').value = '';
    document.getElementById('userFormTitle').textContent = '➕ Tambah User Baru';
    document.getElementById('passwordHint').classList.remove('visible');
}

function deleteUser(id) {
    if (id === 1) {
        showToast('❌ Tidak dapat menghapus admin utama!');
        return;
    }
    
    if (confirm('Yakin ingin menghapus user ini?')) {
        const users = getUsers().filter(u => u.id !== id);
        saveUsers(users);
        renderUserTable();
        showToast('✅ User berhasil dihapus!');
    }
}

function initializeUserManagement() {
    const form = document.getElementById('userForm');
    if (!form) return;
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const editId = document.getElementById('editUserId').value;
        const username = document.getElementById('userUsername').value.trim();
        const name = document.getElementById('userName').value.trim();
        const password = document.getElementById('userPassword').value;
        const role = document.getElementById('userRole').value;
        
        const users = getUsers();
        
        if (editId) {
            // Edit existing user
            const index = users.findIndex(u => u.id === parseInt(editId));
            if (index !== -1) {
                // Check username uniqueness
                if (users.some(u => u.username === username && u.id !== parseInt(editId))) {
                    showToast('❌ Username sudah digunakan!');
                    return;
                }
                
                users[index].username = username;
                users[index].name = name;
                users[index].role = role;
                if (password) {
                    users[index].passwordHash = simpleHash(password);
                }
                showToast('✅ User berhasil diupdate!');
            }
        } else {
            // Add new user
            if (users.some(u => u.username === username)) {
                showToast('❌ Username sudah digunakan!');
                return;
            }
            
            if (!password) {
                showToast('❌ Password wajib diisi untuk user baru!');
                return;
            }
            
            const newUser = {
                id: users.length > 0 ? Math.max(...users.map(u => u.id)) + 1 : 1,
                username,
                name,
                passwordHash: simpleHash(password),
                role
            };
            users.push(newUser);
            showToast('✅ User baru berhasil ditambahkan!');
        }
        
        saveUsers(users);
        renderUserTable();
        cancelEditUser();
    });
}

// ===== Initialize =====
document.addEventListener('DOMContentLoaded', () => {
    initializeCredentials();
    initializeData();
    initializeNavigation();
    initializeTabs();
    initializeSliders();
    initializeForms();
    updateDashboard();
    renderAllTables();
    initializeMap();
    initializeUserManagement();
    
    // Check authentication
    checkAuth();
    
    // Login form handler
    document.getElementById('loginForm')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const username = document.getElementById('loginUsername').value;
        const password = document.getElementById('loginPassword').value;
        const errorEl = document.getElementById('loginError');
        
        if (login(username, password)) {
            errorEl.classList.remove('show');
            showToast('✅ Login berhasil!');
        } else {
            errorEl.textContent = '❌ Username atau password salah!';
            errorEl.classList.add('show');
        }
    });
});

function initializeData() {
    Object.keys(STORAGE_KEYS).forEach(key => {
        if (!localStorage.getItem(STORAGE_KEYS[key]) && DUMMY_DATA[key]) {
            localStorage.setItem(STORAGE_KEYS[key], JSON.stringify(DUMMY_DATA[key]));
        }
    });
}

function getData(key) { return JSON.parse(localStorage.getItem(STORAGE_KEYS[key]) || '[]'); }
function saveData(key, data) { localStorage.setItem(STORAGE_KEYS[key], JSON.stringify(data)); }
function addData(key, item) { const data = getData(key); item.id = data.length > 0 ? Math.max(...data.map(d => d.id)) + 1 : 1; data.push(item); saveData(key, data); return item; }
function deleteData(key, id) { saveData(key, getData(key).filter(d => d.id !== id)); }

// ===== Navigation =====
function initializeNavigation() {
    const navLinks = document.querySelectorAll('.nav-link');
    const pages = document.querySelectorAll('.page');
    const hamburger = document.getElementById('hamburgerBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetPage = link.dataset.page;
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
            pages.forEach(page => { page.classList.remove('active'); if (page.id === targetPage) page.classList.add('active'); });
            sidebar.classList.remove('active'); overlay.classList.remove('active'); hamburger.classList.remove('active');
            if (targetPage === 'dashboard') updateDashboard();
        });
    });

    hamburger.addEventListener('click', () => { hamburger.classList.toggle('active'); sidebar.classList.toggle('active'); overlay.classList.toggle('active'); });
    overlay.addEventListener('click', () => { hamburger.classList.remove('active'); sidebar.classList.remove('active'); overlay.classList.remove('active'); });
}

// ===== Tabs =====
function initializeTabs() {
    document.querySelectorAll('.tab-nav').forEach(tabNav => {
        const tabBtns = tabNav.querySelectorAll('.tab-btn');
        const page = tabNav.closest('.page');
        const tabContents = page.querySelectorAll('.tab-content');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.dataset.tab;
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === targetTab) content.classList.add('active');
                });
            });
        });
    });
}

// ===== Sliders =====
function initializeSliders() {
    ['c_prog1', 'c_prog2', 'c_prog3', 'c_prog4', 'c_prog5'].forEach(id => {
        const slider = document.getElementById(id);
        const val = document.getElementById(id + '_val');
        if (slider && val) slider.addEventListener('input', () => val.textContent = slider.value);
    });
}

// ===== Map =====
let kdmpMap = null;
let mapMarkers = [];

function initializeMap() {
    const mapContainer = document.getElementById('kdmpMap');
    if (!mapContainer || kdmpMap) return;
    
    // Initialize map centered on Indonesia
    kdmpMap = L.map('kdmpMap', {
        center: [-2.5, 118],
        zoom: 5,
        zoomControl: true,
        scrollWheelZoom: true
    });
    
    // Add tile layer (using OpenStreetMap light theme)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(kdmpMap);
    
    // Load KDMP locations
    updateMapMarkers();
}

function updateMapMarkers() {
    if (!kdmpMap) return;
    
    // Clear existing markers
    mapMarkers.forEach(marker => kdmpMap.removeLayer(marker));
    mapMarkers = [];
    
    const data = getData('formA');
    let validLocations = 0;
    
    // Custom icon
    const customIcon = L.divIcon({
        className: 'custom-marker',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -10]
    });
    
    data.forEach(d => {
        if (d.koordinat) {
            // Parse koordinat (format: "lat, long" or "lat,long")
            const coords = d.koordinat.split(',').map(c => parseFloat(c.trim()));
            
            if (coords.length === 2 && !isNaN(coords[0]) && !isNaN(coords[1])) {
                const lat = coords[0];
                const lng = coords[1];
                
                // Validate coordinates are reasonable for Indonesia
                if (lat >= -11 && lat <= 6 && lng >= 95 && lng <= 141) {
                    const marker = L.marker([lat, lng], { icon: customIcon })
                        .bindPopup(`
                            <div class="popup-title">🏢 ${d.koperasi || 'Koperasi'}</div>
                            <div class="popup-info">
                                <strong>Komoditas:</strong> ${d.komoditas || '-'}<br>
                                <strong>Lokasi:</strong> ${d.kabkota || '-'}, ${d.provinsi || '-'}<br>
                                <strong>Koordinat:</strong> ${lat.toFixed(4)}, ${lng.toFixed(4)}<br>
                                <strong>Luas:</strong> ${d.luas || '-'} m²
                            </div>
                        `);
                    
                    marker.addTo(kdmpMap);
                    mapMarkers.push(marker);
                    validLocations++;
                }
            }
        }
    });
    
    // Update stats
    document.getElementById('totalLocations').textContent = validLocations;
    
    // If we have markers, fit bounds to show all
    if (mapMarkers.length > 0) {
        const group = L.featureGroup(mapMarkers);
        kdmpMap.fitBounds(group.getBounds().pad(0.2));
    }
}

// ===== Forms =====
function initializeForms() {
    // Form A - KDMP
    document.getElementById('formA')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const hambatan = Array.from(document.querySelectorAll('input[name="a_hambatan"]:checked')).map(c => c.value);
        const kriteria = ['a_krit1','a_krit2','a_krit3','a_krit4','a_krit5','a_krit6','a_krit7','a_krit8'].map(id => document.getElementById(id)?.checked || false);
        const data = {
            verifikator: document.getElementById('kdmp_verifikator').value,
            tempat_tanggal: `${document.getElementById('kdmp_tempat').value}, ${document.getElementById('kdmp_tanggal').value} ${document.getElementById('kdmp_jam').value}`,
            responden: document.getElementById('kdmp_responden').value, jk: document.getElementById('kdmp_jk').value, umur: parseInt(document.getElementById('kdmp_umur').value) || 0,
            pendidikan: document.getElementById('kdmp_pendidikan').value, pekerjaan: document.getElementById('kdmp_pekerjaan').value, alamat: document.getElementById('kdmp_alamat').value,
            koperasi: document.getElementById('a_koperasi').value, badan_hukum: document.getElementById('a_badan_hukum').value,
            desa: document.getElementById('a_desa').value, kecamatan: document.getElementById('a_kecamatan').value, kabkota: document.getElementById('a_kabkota').value, provinsi: document.getElementById('a_provinsi').value,
            luas: parseInt(document.getElementById('a_luas').value) || 0, paket: parseInt(document.getElementById('a_paket').value) || 1, komoditas: document.getElementById('a_komoditas').value, koordinat: document.getElementById('a_koordinat').value,
            kriteria, kbli: document.getElementById('a_krit1_kbli').value, hari_pelatihan: parseInt(document.getElementById('a_krit7_hari').value) || 0, hambatan,
            catatan: document.getElementById('a_catatan').value, rekomendasi: document.getElementById('a_rekomendasi').value
        };
        addData('formA', data); e.target.reset(); showToast('Kuesioner KDMP Bagian A berhasil disimpan!'); renderKuesionerTable(); updateDashboard(); updateMapMarkers();
    });

    // Form B - KDMP
    document.getElementById('formB')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = {
            verifikator: document.getElementById('kdmp_verifikator').value,
            tempat_tanggal: `${document.getElementById('kdmp_tempat').value}, ${document.getElementById('kdmp_tanggal').value} ${document.getElementById('kdmp_jam').value}`,
            responden: document.getElementById('kdmp_responden').value, jk: document.getElementById('kdmp_jk').value, umur: parseInt(document.getElementById('kdmp_umur').value) || 0,
            pendidikan: document.getElementById('kdmp_pendidikan').value, pekerjaan: document.getElementById('kdmp_pekerjaan').value, alamat: document.getElementById('kdmp_alamat').value,
            jml_pembudidaya: parseInt(document.getElementById('b_jml_pembudidaya').value) || 0, jml_pokdakan: parseInt(document.getElementById('b_jml_pokdakan').value) || 0,
            komoditas_terbanyak: document.getElementById('b_komoditas_terbanyak').value, jml_produksi: parseInt(document.getElementById('b_jml_produksi').value) || 0,
            konsumsi: parseFloat(document.getElementById('b_konsumsi').value) || 0, ikan_pasar: document.getElementById('b_ikan_pasar').value, catatan: document.getElementById('b_catatan').value
        };
        addData('formB', data); e.target.reset(); showToast('Kuesioner KDMP Bagian B berhasil disimpan!'); updateDashboard();
    });

    // Form C - KDMP
    document.getElementById('formC')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const lahan = ['c_lahan1','c_lahan2','c_lahan3','c_lahan4','c_lahan5','c_lahan6','c_lahan7'].map(id => document.getElementById(id)?.checked || false);
        const instalasi = ['c_inst1','c_inst2','c_inst3','c_inst4','c_inst5','c_inst6','c_inst7','c_inst8'].map(id => document.getElementById(id)?.checked || false);
        const kendala = Array.from(document.querySelectorAll('input[name="c_kendala"]:checked')).map(c => c.value);
        const data = {
            verifikator: document.getElementById('kdmp_verifikator').value,
            tempat_tanggal: `${document.getElementById('kdmp_tempat').value}, ${document.getElementById('kdmp_tanggal').value} ${document.getElementById('kdmp_jam').value}`,
            responden: document.getElementById('kdmp_responden').value, koordinat: document.getElementById('c_koordinat').value,
            jk: document.getElementById('kdmp_jk').value, umur: parseInt(document.getElementById('kdmp_umur').value) || 0, lahan, instalasi,
            prog1: parseInt(document.getElementById('c_prog1').value), prog2: parseInt(document.getElementById('c_prog2').value),
            prog3: parseInt(document.getElementById('c_prog3').value), prog4: parseInt(document.getElementById('c_prog4').value), prog5: parseInt(document.getElementById('c_prog5').value),
            tk_laki: parseInt(document.getElementById('c_tk_laki').value) || 0, tk_perempuan: parseInt(document.getElementById('c_tk_perempuan').value) || 0,
            upah: parseInt(document.getElementById('c_upah').value) || 0, jam_kerja: parseInt(document.getElementById('c_jam_kerja').value) || 0,
            tk_lokal: parseInt(document.getElementById('c_tk_lokal').value) || 0, tk_luar: parseInt(document.getElementById('c_tk_luar').value) || 0,
            kendala, sop: document.getElementById('c_sop').value, sop_kendala: document.getElementById('c_sop_kendala').value
        };
        addData('formC', data); e.target.reset(); ['c_prog1','c_prog2','c_prog3','c_prog4','c_prog5'].forEach(id => { const el = document.getElementById(id); const v = document.getElementById(id+'_val'); if(el) el.value = 50; if(v) v.textContent = '50'; });
        showToast('Kuesioner KDMP Bagian C berhasil disimpan!'); renderKuesionerTable(); updateDashboard();
    });

    // Form D - KDMP
    document.getElementById('formD')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const tujuan = Array.from(document.querySelectorAll('input[name="d_tujuan"]:checked')).map(c => c.value);
        const data = {
            responden: document.getElementById('d_responden').value, koperasi: document.getElementById('d_koperasi').value, tujuan, tujuan_lain: document.getElementById('d_tujuan_lain').value,
            pj_operasional: document.getElementById('d_pj_operasional').value, modal: document.getElementById('d_modal').value, strategi: document.getElementById('d_strategi').value,
            kendala_pemasaran: document.getElementById('d_kendala_pemasaran').value, antisipasi: document.getElementById('d_antisipasi').value
        };
        addData('formD', data); e.target.reset(); showToast('Kuesioner KDMP Bagian D berhasil disimpan!'); updateDashboard();
    });

    // Form Masyarakat A
    document.getElementById('formMasyA')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = {
            verifikator: document.getElementById('masy_verifikator').value,
            tempat_tanggal: `${document.getElementById('masy_tempat').value}, ${document.getElementById('masy_tanggal').value} ${document.getElementById('masy_jam').value}`,
            responden: document.getElementById('masy_responden').value, koordinat: document.getElementById('masy_koordinat').value,
            jk: document.getElementById('masy_jk').value, umur: parseInt(document.getElementById('masy_umur').value) || 0,
            pendidikan: document.getElementById('masy_pendidikan').value, pekerjaan: document.getElementById('masy_pekerjaan').value, alamat: document.getElementById('masy_alamat').value,
            sesuai_kebutuhan: document.getElementById('ma_sesuai_kebutuhan').value, tidak_sesuai: document.getElementById('ma_tidak_sesuai').value,
            senang: document.getElementById('ma_senang').value, alasan: document.getElementById('ma_alasan').value,
            harapan: document.getElementById('ma_harapan').value, saran: document.getElementById('ma_saran').value
        };
        addData('masyA', data); e.target.reset(); showToast('Kuesioner Masyarakat Bagian A berhasil disimpan!'); renderMasyarakatTable();
    });

    // Form Masyarakat B
    document.getElementById('formMasyB')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = {};
        for (let i = 1; i <= 15; i++) {
            const selected = document.querySelector(`input[name="mb_q${i}"]:checked`);
            data['q' + i] = selected ? parseInt(selected.value) : 3;
        }
        addData('masyB', data); e.target.reset(); showToast('Kuesioner Masyarakat Bagian B berhasil disimpan!'); renderMasyarakatTable();
    });

    // Form Masyarakat C
    document.getElementById('formMasyC')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = {
            pendapatan_ikan: parseInt(document.getElementById('mc_pendapatan_ikan').value) || 0,
            pendapatan_lain: parseInt(document.getElementById('mc_pendapatan_lain').value) || 0,
            total_pendapatan: parseInt(document.getElementById('mc_total_pendapatan').value) || 0,
            kontribusi: document.getElementById('mc_kontribusi').value, jml_sumber: document.getElementById('mc_jml_sumber').value,
            ketergantungan: document.getElementById('mc_ketergantungan').value, stabilitas: document.getElementById('mc_stabilitas').value,
            peran_perempuan: document.getElementById('mc_peran_perempuan').value, kontribusi_perempuan: document.getElementById('mc_kontribusi_perempuan').value
        };
        addData('masyC', data); e.target.reset(); showToast('Kuesioner Masyarakat Bagian C berhasil disimpan!');
    });

    // Form Masyarakat D
    document.getElementById('formMasyD')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const koperasiChecks = ['md_kop1','md_kop2','md_kop3','md_kop4','md_kop5','md_kop6','md_kop7'].map(id => document.getElementById(id)?.checked || false);
        const data = {
            anggota_kub: document.getElementById('md_anggota_kub').value, manfaat_kub: document.getElementById('md_manfaat_kub').value,
            anggota_koperasi: document.getElementById('md_anggota_koperasi').value, tertarik_koperasi: document.getElementById('md_tertarik_koperasi').value,
            manfaat_koperasi: document.getElementById('md_manfaat_koperasi').value, penilaian_koperasi: koperasiChecks
        };
        addData('masyD', data); e.target.reset(); showToast('Kuesioner Masyarakat Bagian D berhasil disimpan!');
    });

    // Form SPPG A
    document.getElementById('formSppgA')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = {
            verifikator: document.getElementById('sppg_verifikator').value,
            tempat_tanggal: `${document.getElementById('sppg_tempat').value}, ${document.getElementById('sppg_tanggal').value} ${document.getElementById('sppg_jam').value}`,
            responden: document.getElementById('sppg_responden').value, koordinat: document.getElementById('sppg_koordinat').value,
            jk: document.getElementById('sppg_jk').value, umur: parseInt(document.getElementById('sppg_umur').value) || 0,
            pendidikan: document.getElementById('sppg_pendidikan').value, pekerjaan: document.getElementById('sppg_pekerjaan').value, alamat: document.getElementById('sppg_alamat').value,
            nama_sppg: document.getElementById('sa_nama_sppg').value, kabkota: document.getElementById('sa_kabkota').value,
            jml_sekolah: parseInt(document.getElementById('sa_jml_sekolah').value) || 0, jml_siswa: parseInt(document.getElementById('sa_jml_siswa').value) || 0,
            porsi_harian: parseInt(document.getElementById('sa_porsi_harian').value) || 0, porsi_bulanan: parseInt(document.getElementById('sa_porsi_bulanan').value) || 0,
            kebutuhan_lele: parseInt(document.getElementById('sa_kebutuhan_lele').value) || 0, kebutuhan_nila: parseInt(document.getElementById('sa_kebutuhan_nila').value) || 0,
            kebutuhan_lain: parseInt(document.getElementById('sa_kebutuhan_lain').value) || 0, frekuensi: parseInt(document.getElementById('sa_frekuensi').value) || 0,
            anggaran_porsi: parseInt(document.getElementById('sa_anggaran_porsi').value) || 0, terpenuhi: document.getElementById('sa_terpenuhi').value,
            kekurangan: parseInt(document.getElementById('sa_kekurangan').value) || 0
        };
        addData('sppgA', data); e.target.reset(); showToast('Kuesioner SPPG Bagian A berhasil disimpan!'); renderSppgTable();
    });

    // Form SPPG B
    document.getElementById('formSppgB')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const jenis = Array.from(document.querySelectorAll('input[name="sb_jenis"]:checked')).map(c => c.value);
        const ukuran = Array.from(document.querySelectorAll('input[name="sb_ukuran"]:checked')).map(c => c.value);
        const kualitas = Array.from(document.querySelectorAll('input[name="sb_kualitas"]:checked')).map(c => c.value);
        const sertifikasi = Array.from(document.querySelectorAll('input[name="sb_sertifikasi"]:checked')).map(c => c.value);
        const sumber = Array.from(document.querySelectorAll('input[name="sb_sumber"]:checked')).map(c => c.value);
        const data = { jenis, jenis_lain: document.getElementById('sb_jenis_lain').value, ukuran, ukuran_detail: document.getElementById('sb_ukuran_detail').value, kualitas, sertifikasi, sumber };
        addData('sppgB', data); e.target.reset(); showToast('Kuesioner SPPG Bagian B berhasil disimpan!');
    });

    // Form SPPG C
    document.getElementById('formSppgC')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = {
            penting: [1,2,3,4,5].map(i => parseInt(document.getElementById('sc_penting'+i).value)),
            harga: [1,2,3,4,5].map(i => parseInt(document.getElementById('sc_harga'+i).value) || 0)
        };
        addData('sppgC', data); e.target.reset(); showToast('Kuesioner SPPG Bagian C berhasil disimpan!');
    });

    // Form SPPG D
    document.getElementById('formSppgD')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const kendala = Array.from(document.querySelectorAll('input[name="sd_kendala"]:checked')).map(c => c.value);
        const data = {
            kendala, kendala_lain: document.getElementById('sd_kendala_lain').value,
            minat: document.getElementById('sd_minat').value, alasan: document.getElementById('sd_alasan').value,
            volume: parseInt(document.getElementById('sd_volume').value) || 0, jenis: document.getElementById('sd_jenis').value,
            kontrak: document.getElementById('sd_kontrak').value, target: document.getElementById('sd_target').value
        };
        addData('sppgD', data); e.target.reset(); showToast('Kuesioner SPPG Bagian D berhasil disimpan!'); renderSppgTable();
    });
}

// ===== Document Cards =====
function renderAllTables() { renderKdmpCards(); renderMasyCards(); renderSppgCards(); }

// Modal state
let currentModalData = { type: null, id: null, data: null };

function openModal(type, id, data) {
    currentModalData = { type, id, data };
    const modal = document.getElementById('detailModal');
    const title = document.getElementById('modalTitle');
    const body = document.getElementById('modalBody');
    const deleteBtn = document.getElementById('modalDeleteBtn');
    
    deleteBtn.onclick = () => {
        if (confirm('Hapus data ini?')) {
            if (type === 'kdmp') { deleteData('formA', id); renderKdmpCards(); updateDashboard(); }
            else if (type === 'masy') { deleteData('masyA', id); renderMasyCards(); }
            else if (type === 'sppg') { deleteData('sppgA', id); renderSppgCards(); }
            closeModal();
            showToast('Data dihapus!');
        }
    };
    
    if (type === 'kdmp') {
        title.textContent = 'Detail Kuesioner KDMP';
        const dataC = getData('formC').find(c => c.responden === data.responden);
        const avgProg = dataC ? Math.round((dataC.prog1+dataC.prog2+dataC.prog3+dataC.prog4+dataC.prog5)/5) : 0;
        const statusClass = avgProg >= 75 ? 'success' : avgProg >= 50 ? 'warning' : '';
        const statusText = avgProg >= 75 ? 'Progres Baik' : avgProg >= 50 ? 'Dalam Proses' : 'Tahap Awal';
        
        body.innerHTML = `
            <!-- Hero Header -->
            <div class="modal-hero">
                <div class="modal-hero-icon">🏢</div>
                <div class="modal-hero-content">
                    <h4>${data.koperasi || 'Koperasi'}</h4>
                    <p>${data.kabkota || '-'}, ${data.provinsi || '-'}</p>
                </div>
            </div>
            
            <!-- Stat Cards -->
            <div class="modal-stats-grid">
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">🐟</div>
                    <div class="modal-stat-value">${data.komoditas || '-'}</div>
                    <div class="modal-stat-label">Komoditas</div>
                </div>
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">📦</div>
                    <div class="modal-stat-value">${data.paket || 0}</div>
                    <div class="modal-stat-label">Paket</div>
                </div>
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">📐</div>
                    <div class="modal-stat-value">${data.luas || 0}</div>
                    <div class="modal-stat-label">Luas (m²)</div>
                </div>
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">📊</div>
                    <div class="modal-stat-value">${avgProg}%</div>
                    <div class="modal-stat-label">Progres</div>
                </div>
            </div>
            
            <!-- Status Tags -->
            <div class="modal-tags">
                <span class="modal-tag ${statusClass}">${statusText}</span>
                <span class="modal-tag">${data.badan_hukum || 'Belum Berbadan Hukum'}</span>
            </div>
            
            <!-- Progress Bar -->
            <div class="modal-progress-section">
                <div class="modal-progress-item">
                    <div class="modal-progress-header">
                        <span class="modal-progress-label">Tingkat Penyelesaian</span>
                        <span class="modal-progress-value">${avgProg}%</span>
                    </div>
                    <div class="modal-progress-bar">
                        <div class="modal-progress-fill" style="width: ${avgProg}%"></div>
                    </div>
                </div>
            </div>
            
            <div class="modal-divider"></div>
            
            <!-- Info Table -->
            <table class="modal-info-table">
                <tr><th>Verifikator</th><td>${data.verifikator || '-'}</td></tr>
                <tr><th>Responden</th><td>${data.responden || '-'}</td></tr>
                <tr><th>Waktu Survey</th><td>${data.tempat_tanggal || '-'}</td></tr>
                <tr><th>Desa/Kelurahan</th><td>${data.desa || '-'}</td></tr>
                <tr><th>Kecamatan</th><td>${data.kecamatan || '-'}</td></tr>
                <tr><th>Koordinat</th><td>${data.koordinat || '-'}</td></tr>
            </table>`;
    } else if (type === 'masy') {
        title.textContent = 'Detail Kuesioner Masyarakat';
        const senangIcon = data.senang === 'Senang' ? '😊' : data.senang === 'Biasa saja' ? '😐' : '😞';
        const senangClass = data.senang === 'Senang' ? 'success' : data.senang === 'Biasa saja' ? 'warning' : '';
        
        body.innerHTML = `
            <!-- Hero Header -->
            <div class="modal-hero">
                <div class="modal-hero-icon">👤</div>
                <div class="modal-hero-content">
                    <h4>${data.responden || 'Responden'}</h4>
                    <p>${data.pekerjaan || '-'} • ${data.alamat || '-'}</p>
                </div>
            </div>
            
            <!-- Mini Cards -->
            <div class="modal-mini-cards">
                <div class="modal-mini-card">
                    <div class="modal-mini-card-label">Jenis Kelamin</div>
                    <div class="modal-mini-card-value"><span class="icon">${data.jk === 'Laki-laki' ? '👨' : '👩'}</span>${data.jk || '-'}</div>
                </div>
                <div class="modal-mini-card">
                    <div class="modal-mini-card-label">Umur</div>
                    <div class="modal-mini-card-value"><span class="icon">🎂</span>${data.umur || '-'} tahun</div>
                </div>
                <div class="modal-mini-card">
                    <div class="modal-mini-card-label">Pendidikan</div>
                    <div class="modal-mini-card-value"><span class="icon">🎓</span>${data.pendidikan || '-'}</div>
                </div>
                <div class="modal-mini-card">
                    <div class="modal-mini-card-label">Koordinat</div>
                    <div class="modal-mini-card-value"><span class="icon">📍</span>${data.koordinat || '-'}</div>
                </div>
            </div>
            
            <!-- Status Tags -->
            <div class="modal-tags">
                <span class="modal-tag ${senangClass}">${senangIcon} ${data.senang || '-'}</span>
                <span class="modal-tag">${data.sesuai_kebutuhan || '-'}</span>
            </div>
            
            <div class="modal-divider"></div>
            
            <!-- Info Table -->
            <table class="modal-info-table">
                <tr><th>Verifikator</th><td>${data.verifikator || '-'}</td></tr>
                <tr><th>Waktu Survey</th><td>${data.tempat_tanggal || '-'}</td></tr>
                <tr><th>Harapan</th><td>${data.harapan || '-'}</td></tr>
                <tr><th>Saran</th><td>${data.saran || '-'}</td></tr>
            </table>`;
    } else if (type === 'sppg') {
        title.textContent = 'Detail Kuesioner SPPG';
        const total = (data.kebutuhan_lele||0) + (data.kebutuhan_nila||0) + (data.kebutuhan_lain||0);
        const lelePercent = total > 0 ? Math.round((data.kebutuhan_lele||0) / total * 100) : 0;
        const nilaPercent = total > 0 ? Math.round((data.kebutuhan_nila||0) / total * 100) : 0;
        const lainPercent = total > 0 ? Math.round((data.kebutuhan_lain||0) / total * 100) : 0;
        
        body.innerHTML = `
            <!-- Hero Header -->
            <div class="modal-hero">
                <div class="modal-hero-icon">🏫</div>
                <div class="modal-hero-content">
                    <h4>${data.nama_sppg || 'SPPG'}</h4>
                    <p>${data.kabkota || '-'}</p>
                </div>
            </div>
            
            <!-- Stat Cards -->
            <div class="modal-stats-grid">
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">🏫</div>
                    <div class="modal-stat-value">${(data.jml_sekolah||0).toLocaleString('id-ID')}</div>
                    <div class="modal-stat-label">Sekolah</div>
                </div>
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">👨‍🎓</div>
                    <div class="modal-stat-value">${(data.jml_siswa||0).toLocaleString('id-ID')}</div>
                    <div class="modal-stat-label">Siswa</div>
                </div>
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">🍽️</div>
                    <div class="modal-stat-value">${(data.porsi_bulanan||0).toLocaleString('id-ID')}</div>
                    <div class="modal-stat-label">Porsi/Bulan</div>
                </div>
                <div class="modal-stat-card">
                    <div class="modal-stat-icon">🐟</div>
                    <div class="modal-stat-value">${total.toLocaleString('id-ID')}</div>
                    <div class="modal-stat-label">Kg/Bulan</div>
                </div>
            </div>
            
            <!-- Status Tags -->
            <div class="modal-tags">
                <span class="modal-tag">${data.terpenuhi === 'Ya' ? '✅ Terpenuhi' : '⚠️ Belum Terpenuhi'}</span>
                <span class="modal-tag">${data.frekuensi || 0} hari/minggu</span>
            </div>
            
            <!-- Progress Bars for Fish Types -->
            <div class="modal-progress-section">
                <div class="modal-progress-item">
                    <div class="modal-progress-header">
                        <span class="modal-progress-label">🐱 Lele (${(data.kebutuhan_lele||0).toLocaleString('id-ID')} Kg)</span>
                        <span class="modal-progress-value">${lelePercent}%</span>
                    </div>
                    <div class="modal-progress-bar">
                        <div class="modal-progress-fill" style="width: ${lelePercent}%"></div>
                    </div>
                </div>
                <div class="modal-progress-item">
                    <div class="modal-progress-header">
                        <span class="modal-progress-label">🐠 Nila (${(data.kebutuhan_nila||0).toLocaleString('id-ID')} Kg)</span>
                        <span class="modal-progress-value">${nilaPercent}%</span>
                    </div>
                    <div class="modal-progress-bar">
                        <div class="modal-progress-fill" style="width: ${nilaPercent}%"></div>
                    </div>
                </div>
                <div class="modal-progress-item">
                    <div class="modal-progress-header">
                        <span class="modal-progress-label">🐟 Lainnya (${(data.kebutuhan_lain||0).toLocaleString('id-ID')} Kg)</span>
                        <span class="modal-progress-value">${lainPercent}%</span>
                    </div>
                    <div class="modal-progress-bar">
                        <div class="modal-progress-fill" style="width: ${lainPercent}%"></div>
                    </div>
                </div>
            </div>
            
            <div class="modal-divider"></div>
            
            <!-- Info Table -->
            <table class="modal-info-table">
                <tr><th>Verifikator</th><td>${data.verifikator || '-'}</td></tr>
                <tr><th>Responden</th><td>${data.responden || '-'}</td></tr>
                <tr><th>Waktu Survey</th><td>${data.tempat_tanggal || '-'}</td></tr>
                <tr><th>Anggaran/Porsi</th><td>Rp ${(data.anggaran_porsi||0).toLocaleString('id-ID')}</td></tr>
            </table>`;
    }
    
    modal.classList.add('active');
}

function closeModal() {
    document.getElementById('detailModal').classList.remove('active');
    currentModalData = { type: null, id: null, data: null };
}

// Close modal on outside click
document.getElementById('detailModal')?.addEventListener('click', (e) => {
    if (e.target.id === 'detailModal') closeModal();
});

function createEmptyState(icon, message) {
    return `<div class="empty-cards-message"><div class="empty-icon">${icon}</div><p>${message}</p></div>`;
}

function renderKdmpCards() {
    const grid = document.getElementById('kdmpCardsGrid');
    if (!grid) return;
    const dataA = getData('formA'), dataC = getData('formC');
    if (dataA.length === 0) { grid.innerHTML = createEmptyState('📋', 'Belum ada data kuesioner KDMP'); return; }
    
    grid.innerHTML = dataA.map(d => {
        const cData = dataC.find(c => c.responden === d.responden);
        const avgProg = cData ? Math.round((cData.prog1+cData.prog2+cData.prog3+cData.prog4+cData.prog5)/5) : 0;
        const statusIcon = avgProg >= 75 ? '✅' : avgProg >= 50 ? '🔄' : '⏳';
        return `
            <div class="document-card" onclick='openModal("kdmp", ${d.id}, ${JSON.stringify(d).replace(/'/g, "\\'")})'>
                <div class="document-card-actions">
                    <button class="card-action-btn delete" onclick="event.stopPropagation(); handleDeleteKDMP(${d.id})">🗑️</button>
                </div>
                <div class="document-card-header">
                    <div class="document-card-icon">🏢</div>
                    <span class="document-card-badge badge-kdmp">KDMP</span>
                </div>
                <div class="document-card-title">${d.koperasi || 'Koperasi'}</div>
                <div class="document-card-subtitle">${d.kabkota || '-'}, ${d.provinsi || '-'}</div>
                <div class="document-card-meta">
                    <div class="meta-item"><span>🐟</span><span>${d.komoditas || '-'}</span></div>
                    <div class="meta-item"><span>📊</span><span>${avgProg}%</span></div>
                    <div class="meta-item"><span>${statusIcon}</span><span>${avgProg >= 75 ? 'Baik' : avgProg >= 50 ? 'Proses' : 'Awal'}</span></div>
                </div>
            </div>`;
    }).join('');
}

function renderMasyCards() {
    const grid = document.getElementById('masyCardsGrid');
    if (!grid) return;
    const dataA = getData('masyA');
    if (dataA.length === 0) { grid.innerHTML = createEmptyState('👥', 'Belum ada data kuesioner Masyarakat'); return; }
    
    grid.innerHTML = dataA.map(d => {
        const senangIcon = d.senang === 'Senang' ? '😊' : d.senang === 'Biasa saja' ? '😐' : '😞';
        return `
            <div class="document-card" onclick='openModal("masy", ${d.id}, ${JSON.stringify(d).replace(/'/g, "\\'")})'>
                <div class="document-card-actions">
                    <button class="card-action-btn delete" onclick="event.stopPropagation(); handleDeleteMasy(${d.id})">🗑️</button>
                </div>
                <div class="document-card-header">
                    <div class="document-card-icon">👤</div>
                    <span class="document-card-badge badge-masy">Masyarakat</span>
                </div>
                <div class="document-card-title">${d.responden || 'Responden'}</div>
                <div class="document-card-subtitle">${d.pekerjaan || '-'}</div>
                <div class="document-card-meta">
                    <div class="meta-item"><span>${senangIcon}</span><span>${d.senang || '-'}</span></div>
                    <div class="meta-item"><span>📍</span><span>${d.koordinat || '-'}</span></div>
                </div>
            </div>`;
    }).join('');
}

function renderSppgCards() {
    const grid = document.getElementById('sppgCardsGrid');
    if (!grid) return;
    const dataA = getData('sppgA'), dataD = getData('sppgD');
    if (dataA.length === 0) { grid.innerHTML = createEmptyState('🏫', 'Belum ada data kuesioner SPPG'); return; }
    
    grid.innerHTML = dataA.map(d => {
        const total = (d.kebutuhan_lele||0) + (d.kebutuhan_nila||0) + (d.kebutuhan_lain||0);
        const dData = dataD.find(dd => dd.nama_sppg === d.nama_sppg);
        const minat = dData?.minat || '-';
        return `
            <div class="document-card" onclick='openModal("sppg", ${d.id}, ${JSON.stringify(d).replace(/'/g, "\\'")})'>
                <div class="document-card-actions">
                    <button class="card-action-btn delete" onclick="event.stopPropagation(); handleDeleteSppg(${d.id})">🗑️</button>
                </div>
                <div class="document-card-header">
                    <div class="document-card-icon">🏫</div>
                    <span class="document-card-badge badge-sppg">SPPG</span>
                </div>
                <div class="document-card-title">${d.nama_sppg || 'SPPG'}</div>
                <div class="document-card-subtitle">${d.kabkota || '-'}</div>
                <div class="document-card-meta">
                    <div class="meta-item"><span>🐟</span><span>${total.toLocaleString('id-ID')} Kg</span></div>
                    <div class="meta-item"><span>🤝</span><span>${minat}</span></div>
                </div>
            </div>`;
    }).join('');
}

function handleDeleteKDMP(id) { if (confirm('Hapus data ini?')) { deleteData('formA', id); renderKdmpCards(); updateDashboard(); showToast('Data dihapus!'); } }
function handleDeleteMasy(id) { if (confirm('Hapus data ini?')) { deleteData('masyA', id); renderMasyCards(); showToast('Data dihapus!'); } }
function handleDeleteSppg(id) { if (confirm('Hapus data ini?')) { deleteData('sppgA', id); renderSppgCards(); showToast('Data dihapus!'); } }

// ===== Dashboard =====
function updateDashboard() { updateStats(); updateCharts(); }

function updateStats() {
    const a = getData('formA'), b = getData('formB'), c = getData('formC'), masy = getData('masyA');
    document.getElementById('totalKuesioner').textContent = a.length + masy.length;
    document.getElementById('totalKoperasi').textContent = a.length;
    const totalPembudidaya = b.reduce((s, d) => s + (d.jml_pembudidaya || 0), 0);
    document.getElementById('totalPembudidaya').textContent = totalPembudidaya;
    const avgProg = c.length > 0 ? Math.round(c.reduce((s, d) => s + (d.prog1+d.prog2+d.prog3+d.prog4+d.prog5)/5, 0) / c.length) : 0;
    document.getElementById('avgProgress').textContent = avgProg + '%';
}

function updateCharts() { updateKomoditasChart(); updateProgresChart(); updateHambatanChart(); updateInstalasiChart(); }

function updateKomoditasChart() {
    const ctx = document.getElementById('komoditasChart')?.getContext('2d');
    if (!ctx) return;
    const data = getData('formA');
    const lele = data.filter(d => d.komoditas === 'Lele').length, nila = data.filter(d => d.komoditas === 'Nila').length;
    if (charts.komoditas) charts.komoditas.destroy();
    charts.komoditas = new Chart(ctx, { type: 'pie', data: { labels: ['Lele', 'Nila'], datasets: [{ data: [lele, nila], backgroundColor: ['rgba(14,165,233,0.8)', 'rgba(99,102,241,0.8)'], borderWidth: 2 }] }, options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', labels: { color: '#e5e7eb' } } } } });
}

function updateProgresChart() {
    const ctx = document.getElementById('progresChart')?.getContext('2d');
    if (!ctx) return;
    const data = getData('formC');
    const labels = ['Bangunan', 'Kolam', 'Listrik', 'Air', 'Aerasi'];
    const avg = data.length > 0 ? [
        Math.round(data.reduce((s,d) => s+d.prog1, 0)/data.length),
        Math.round(data.reduce((s,d) => s+d.prog2, 0)/data.length),
        Math.round(data.reduce((s,d) => s+d.prog3, 0)/data.length),
        Math.round(data.reduce((s,d) => s+d.prog4, 0)/data.length),
        Math.round(data.reduce((s,d) => s+d.prog5, 0)/data.length)
    ] : [0,0,0,0,0];
    if (charts.progres) charts.progres.destroy();
    charts.progres = new Chart(ctx, { type: 'bar', data: { labels, datasets: [{ label: 'Progres %', data: avg, backgroundColor: ['rgba(239,68,68,0.8)','rgba(245,158,11,0.8)','rgba(34,211,238,0.8)','rgba(16,185,129,0.8)','rgba(99,102,241,0.8)'], borderRadius: 8 }] }, options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, max: 100, ticks: { color: '#9ca3af' }, grid: { color: 'rgba(255,255,255,0.08)' } }, x: { ticks: { color: '#9ca3af' }, grid: { display: false } } } } });
}

function updateHambatanChart() {
    const ctx = document.getElementById('hambatanChart')?.getContext('2d');
    if (!ctx) return;
    const data = getData('formA');
    const cats = ['SDM', 'Modal', 'Kepercayaan', 'Pasar', 'Tata Kelola'];
    const counts = cats.map(c => data.filter(d => d.hambatan && d.hambatan.includes(c)).length);
    if (charts.hambatan) charts.hambatan.destroy();
    charts.hambatan = new Chart(ctx, { type: 'doughnut', data: { labels: cats, datasets: [{ data: counts, backgroundColor: ['rgba(239,68,68,0.8)','rgba(249,115,22,0.8)','rgba(234,179,8,0.8)','rgba(34,197,94,0.8)','rgba(99,102,241,0.8)'], borderWidth: 2 }] }, options: { responsive: true, maintainAspectRatio: false, cutout: '60%', plugins: { legend: { position: 'bottom', labels: { color: '#e5e7eb', font: { size: 11 } } } } } });
}

function updateInstalasiChart() {
    const ctx = document.getElementById('instalasiChart')?.getContext('2d');
    if (!ctx) return;
    const data = getData('formC');
    const labels = ['Kolam', 'Lantai', 'Air', 'Listrik', 'Aerasi', 'Atap', 'Peralatan', 'IPAL'];
    const counts = labels.map((_, i) => data.filter(d => d.instalasi && d.instalasi[i]).length);
    if (charts.instalasi) charts.instalasi.destroy();
    charts.instalasi = new Chart(ctx, { type: 'bar', data: { labels, datasets: [{ label: 'Terinstal', data: counts, backgroundColor: 'rgba(16,185,129,0.8)', borderRadius: 6 }] }, options: { responsive: true, maintainAspectRatio: false, indexAxis: 'y', plugins: { legend: { display: false } }, scales: { x: { beginAtZero: true, ticks: { color: '#9ca3af', stepSize: 1 }, grid: { color: 'rgba(255,255,255,0.08)' } }, y: { ticks: { color: '#9ca3af', font: { size: 10 } }, grid: { display: false } } } } });
}

function showToast(msg) { const t = document.getElementById('toast'); t.querySelector('.toast-message').textContent = msg; t.classList.add('show'); setTimeout(() => t.classList.remove('show'), 3000); }

// ===== Export/Import Functions =====
const EXPORT_KEYS = Object.keys(STORAGE_KEYS);

function exportToJSON() {
    const backup = {
        exportDate: new Date().toISOString(),
        version: '1.0',
        data: {}
    };
    
    EXPORT_KEYS.forEach(key => {
        backup.data[key] = getData(key);
    });
    
    const blob = new Blob([JSON.stringify(backup, null, 2)], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `backup_kuesioner_${new Date().toISOString().slice(0,10)}.json`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
    
    showToast('✅ Backup JSON berhasil diunduh!');
}

function importFromJSON(event) {
    const file = event.target.files[0];
    if (!file) return;
    
    const reader = new FileReader();
    reader.onload = (e) => {
        try {
            const backup = JSON.parse(e.target.result);
            
            if (!backup.data) {
                showToast('❌ File backup tidak valid!');
                return;
            }
            
            const existingCount = EXPORT_KEYS.reduce((sum, key) => sum + getData(key).length, 0);
            
            if (existingCount > 0) {
                const choice = confirm('Data saat ini akan digabung dengan backup.\n\nKlik OK untuk GABUNG data.\nKlik Cancel untuk REPLACE (hapus data lama).');
                
                if (!choice) {
                    // Replace mode - clear existing data first
                    EXPORT_KEYS.forEach(key => localStorage.removeItem(STORAGE_KEYS[key]));
                }
            }
            
            // Import data
            Object.keys(backup.data).forEach(key => {
                if (EXPORT_KEYS.includes(key)) {
                    const existing = getData(key);
                    const imported = backup.data[key] || [];
                    
                    // Merge: add imported data, reassign IDs to avoid conflicts
                    imported.forEach(item => {
                        item.id = Date.now() + Math.random();
                        existing.push(item);
                    });
                    
                    localStorage.setItem(key, JSON.stringify(existing));
                }
            });
            
            // Refresh UI
            renderAllTables();
            updateDashboard();
            showToast(`✅ Import berhasil! ${Object.values(backup.data).flat().length} record ditambahkan.`);
            
        } catch (err) {
            console.error(err);
            showToast('❌ Gagal membaca file backup!');
        }
    };
    reader.readAsText(file);
    event.target.value = ''; // Reset file input
}

function exportToExcel() {
    // Create workbook data
    const wb = { SheetNames: [], Sheets: {} };
    
    // Helper function to create sheet
    const createSheet = (name, data, headers) => {
        if (!data.length) return null;
        
        const wsData = [headers];
        data.forEach(row => {
            const rowData = headers.map(h => {
                const key = h.toLowerCase().replace(/[^a-z0-9]/g, '_');
                // Try to find matching key
                for (const k of Object.keys(row)) {
                    if (k.toLowerCase().includes(key.slice(0,4)) || key.includes(k.slice(0,4))) {
                        return row[k] ?? '';
                    }
                }
                return row[key] ?? '';
            });
            wsData.push(rowData);
        });
        
        return wsData;
    };
    
    // KDMP data
    const kdmpA = getData('formA');
    if (kdmpA.length) {
        const headers = ['ID', 'Verifikator', 'Responden', 'Tempat_Tanggal', 'Koperasi', 'Kabupaten', 'Provinsi', 'Komoditas', 'Luas', 'Paket'];
        const wsData = [headers];
        kdmpA.forEach(d => wsData.push([d.id, d.verifikator, d.responden, d.tempat_tanggal, d.koperasi, d.kabkota, d.provinsi, d.komoditas, d.luas, d.paket]));
        wb.SheetNames.push('KDMP');
        wb.Sheets['KDMP'] = arrayToSheet(wsData);
    }
    
    // Masyarakat data
    const masyA = getData('masyA');
    if (masyA.length) {
        const headers = ['ID', 'Verifikator', 'Responden', 'Tempat_Tanggal', 'JK', 'Umur', 'Pendidikan', 'Pekerjaan', 'Senang', 'Sesuai_Kebutuhan', 'Harapan'];
        const wsData = [headers];
        masyA.forEach(d => wsData.push([d.id, d.verifikator, d.responden, d.tempat_tanggal, d.jk, d.umur, d.pendidikan, d.pekerjaan, d.senang, d.sesuai_kebutuhan, d.harapan]));
        wb.SheetNames.push('Masyarakat');
        wb.Sheets['Masyarakat'] = arrayToSheet(wsData);
    }
    
    // SPPG data
    const sppgA = getData('sppgA');
    if (sppgA.length) {
        const headers = ['ID', 'Verifikator', 'Responden', 'Nama_SPPG', 'Kabupaten', 'Jml_Sekolah', 'Jml_Siswa', 'Kebutuhan_Lele', 'Kebutuhan_Nila', 'Kebutuhan_Lain', 'Frekuensi'];
        const wsData = [headers];
        sppgA.forEach(d => wsData.push([d.id, d.verifikator, d.responden, d.nama_sppg, d.kabkota, d.jml_sekolah, d.jml_siswa, d.kebutuhan_lele, d.kebutuhan_nila, d.kebutuhan_lain, d.frekuensi]));
        wb.SheetNames.push('SPPG');
        wb.Sheets['SPPG'] = arrayToSheet(wsData);
    }
    
    if (wb.SheetNames.length === 0) {
        showToast('⚠️ Tidak ada data untuk di-export!');
        return;
    }
    
    // Generate Excel file using simple CSV approach (no library needed)
    downloadExcelAsCSV(wb);
    showToast('✅ Export Excel berhasil diunduh!');
}

function arrayToSheet(data) {
    return data;
}

function downloadExcelAsCSV(wb) {
    // Download each sheet as separate CSV, or combine into one
    wb.SheetNames.forEach(name => {
        const data = wb.Sheets[name];
        const csv = data.map(row => row.map(cell => {
            if (cell === null || cell === undefined) return '';
            const str = String(cell);
            // Escape quotes and wrap in quotes if contains comma
            if (str.includes(',') || str.includes('"') || str.includes('\n')) {
                return '"' + str.replace(/"/g, '""') + '"';
            }
            return str;
        }).join(',')).join('\n');
        
        const blob = new Blob(['\ufeff' + csv], { type: 'text/csv;charset=utf-8' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `${name}_${new Date().toISOString().slice(0,10)}.csv`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    });
}

// ===== Excel Import Functions =====

// Helper function to parse Excel file
function parseExcelFile(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = (e) => {
            try {
                const data = new Uint8Array(e.target.result);
                const workbook = XLSX.read(data, { type: 'array' });
                const firstSheet = workbook.SheetNames[0];
                const worksheet = workbook.Sheets[firstSheet];
                const jsonData = XLSX.utils.sheet_to_json(worksheet, { defval: '' });
                resolve(jsonData);
            } catch (err) {
                reject(err);
            }
        };
        reader.onerror = reject;
        reader.readAsArrayBuffer(file);
    });
}

// Helper to normalize column names
function normalizeKey(key) {
    return key.toString().toLowerCase().replace(/[^a-z0-9]/g, '_').replace(/_+/g, '_').replace(/^_|_$/g, '');
}

// Map Excel row to form data with flexible column matching
function mapExcelRow(row, mappings) {
    const result = {};
    const normalizedRow = {};
    
    // Normalize all keys in the row
    Object.keys(row).forEach(key => {
        normalizedRow[normalizeKey(key)] = row[key];
    });
    
    // Map each field
    Object.keys(mappings).forEach(fieldName => {
        const possibleKeys = mappings[fieldName];
        let value = '';
        
        for (const key of possibleKeys) {
            const normalizedKey = normalizeKey(key);
            if (normalizedRow[normalizedKey] !== undefined && normalizedRow[normalizedKey] !== '') {
                value = normalizedRow[normalizedKey];
                break;
            }
        }
        
        result[fieldName] = value;
    });
    
    return result;
}

// Import KDMP from Excel
async function importKDMPFromExcel(event) {
    const file = event.target.files[0];
    if (!file) return;
    
    try {
        showToast('⏳ Memproses file Excel...');
        const rows = await parseExcelFile(file);
        
        if (rows.length === 0) {
            showToast('⚠️ File Excel kosong!');
            return;
        }
        
        // Field mapping: formFieldName: [possible excel column names]
        const mappings = {
            verifikator: ['verifikator', 'nama_verifikator', 'surveyor'],
            responden: ['responden', 'nama_responden', 'name'],
            tempat_tanggal: ['tempat_tanggal', 'tanggal', 'waktu', 'date'],
            jk: ['jenis_kelamin', 'jk', 'gender'],
            umur: ['umur', 'usia', 'age'],
            pendidikan: ['pendidikan', 'education'],
            pekerjaan: ['pekerjaan', 'jabatan', 'job'],
            alamat: ['alamat', 'address', 'alamat_ktp'],
            koperasi: ['koperasi', 'nama_koperasi', 'nama_kdmp'],
            badan_hukum: ['badan_hukum', 'no_badan_hukum', 'ahu'],
            desa: ['desa', 'kelurahan', 'village'],
            kecamatan: ['kecamatan', 'district'],
            kabkota: ['kabupaten', 'kabkota', 'kota', 'city', 'kabupaten_kota'],
            provinsi: ['provinsi', 'province'],
            luas: ['luas', 'luas_lahan', 'area'],
            paket: ['paket', 'jumlah_paket'],
            komoditas: ['komoditas', 'jenis_ikan', 'commodity'],
            koordinat: ['koordinat', 'koordinat_gps', 'gps', 'coordinate', 'lat_long'],
            catatan: ['catatan', 'notes', 'keterangan'],
            rekomendasi: ['rekomendasi', 'recommendation']
        };
        
        let imported = 0;
        rows.forEach(row => {
            const mapped = mapExcelRow(row, mappings);
            
            // Skip empty rows
            if (!mapped.koperasi && !mapped.responden) return;
            
            const data = {
                verifikator: mapped.verifikator || 'Import Excel',
                tempat_tanggal: mapped.tempat_tanggal || new Date().toLocaleDateString('id-ID'),
                responden: mapped.responden || '',
                jk: mapped.jk || 'Laki-laki',
                umur: parseInt(mapped.umur) || 0,
                pendidikan: mapped.pendidikan || 'SMA',
                pekerjaan: mapped.pekerjaan || '',
                alamat: mapped.alamat || '',
                koperasi: mapped.koperasi || '',
                badan_hukum: mapped.badan_hukum || '',
                desa: mapped.desa || '',
                kecamatan: mapped.kecamatan || '',
                kabkota: mapped.kabkota || '',
                provinsi: mapped.provinsi || 'Aceh',
                luas: parseInt(mapped.luas) || 0,
                paket: parseInt(mapped.paket) || 1,
                komoditas: mapped.komoditas || 'Lele',
                koordinat: mapped.koordinat || '',
                kriteria: [false, false, false, false, false, false, false, false],
                kbli: '',
                hari_pelatihan: 0,
                hambatan: [],
                catatan: mapped.catatan || '',
                rekomendasi: mapped.rekomendasi || ''
            };
            
            addData('formA', data);
            imported++;
        });
        
        event.target.value = '';
        renderKdmpCards();
        updateDashboard();
        updateMapMarkers();
        showToast(`✅ Berhasil import ${imported} data KDMP!`);
        
    } catch (err) {
        console.error('Import error:', err);
        showToast('❌ Gagal import file Excel!');
        event.target.value = '';
    }
}

// Import Masyarakat from Excel
async function importMasyarakatFromExcel(event) {
    const file = event.target.files[0];
    if (!file) return;
    
    try {
        showToast('⏳ Memproses file Excel...');
        const rows = await parseExcelFile(file);
        
        if (rows.length === 0) {
            showToast('⚠️ File Excel kosong!');
            return;
        }
        
        const mappings = {
            verifikator: ['verifikator', 'nama_verifikator', 'surveyor'],
            responden: ['responden', 'nama_responden', 'name'],
            tempat_tanggal: ['tempat_tanggal', 'tanggal', 'waktu', 'date'],
            koordinat: ['koordinat', 'gps', 'coordinate'],
            jk: ['jenis_kelamin', 'jk', 'gender'],
            umur: ['umur', 'usia', 'age'],
            pendidikan: ['pendidikan', 'education'],
            pekerjaan: ['pekerjaan', 'jabatan', 'job'],
            alamat: ['alamat', 'address'],
            sesuai_kebutuhan: ['sesuai_kebutuhan', 'kesesuaian', 'sesuai'],
            tidak_sesuai: ['tidak_sesuai', 'item_tidak_sesuai'],
            senang: ['senang', 'perasaan', 'feeling'],
            alasan: ['alasan', 'reason'],
            harapan: ['harapan', 'hope', 'expectation'],
            saran: ['saran', 'masukan', 'suggestion']
        };
        
        let imported = 0;
        rows.forEach(row => {
            const mapped = mapExcelRow(row, mappings);
            
            if (!mapped.responden) return;
            
            const data = {
                verifikator: mapped.verifikator || 'Import Excel',
                tempat_tanggal: mapped.tempat_tanggal || new Date().toLocaleDateString('id-ID'),
                responden: mapped.responden || '',
                koordinat: mapped.koordinat || '',
                jk: mapped.jk || 'Laki-laki',
                umur: parseInt(mapped.umur) || 0,
                pendidikan: mapped.pendidikan || 'SMA',
                pekerjaan: mapped.pekerjaan || '',
                alamat: mapped.alamat || '',
                sesuai_kebutuhan: mapped.sesuai_kebutuhan || 'Ya, sesuai',
                tidak_sesuai: mapped.tidak_sesuai || '',
                senang: mapped.senang || 'Senang',
                alasan: mapped.alasan || '',
                harapan: mapped.harapan || '',
                saran: mapped.saran || ''
            };
            
            addData('masyA', data);
            imported++;
        });
        
        event.target.value = '';
        renderMasyCards();
        showToast(`✅ Berhasil import ${imported} data Masyarakat!`);
        
    } catch (err) {
        console.error('Import error:', err);
        showToast('❌ Gagal import file Excel!');
        event.target.value = '';
    }
}

// Import SPPG from Excel
async function importSPPGFromExcel(event) {
    const file = event.target.files[0];
    if (!file) return;
    
    try {
        showToast('⏳ Memproses file Excel...');
        const rows = await parseExcelFile(file);
        
        if (rows.length === 0) {
            showToast('⚠️ File Excel kosong!');
            return;
        }
        
        const mappings = {
            verifikator: ['verifikator', 'nama_verifikator', 'surveyor'],
            responden: ['responden', 'nama_responden', 'name'],
            tempat_tanggal: ['tempat_tanggal', 'tanggal', 'waktu', 'date'],
            koordinat: ['koordinat', 'gps', 'coordinate'],
            jk: ['jenis_kelamin', 'jk', 'gender'],
            umur: ['umur', 'usia', 'age'],
            pendidikan: ['pendidikan', 'education'],
            pekerjaan: ['pekerjaan', 'jabatan', 'job'],
            alamat: ['alamat', 'address'],
            nama_sppg: ['nama_sppg', 'sppg', 'name_sppg'],
            kabkota: ['kabupaten', 'kabkota', 'kota', 'city'],
            jml_sekolah: ['jml_sekolah', 'jumlah_sekolah', 'sekolah'],
            jml_siswa: ['jml_siswa', 'jumlah_siswa', 'siswa', 'student'],
            porsi_harian: ['porsi_harian', 'porsi_per_hari'],
            porsi_bulanan: ['porsi_bulanan', 'porsi_per_bulan'],
            kebutuhan_lele: ['kebutuhan_lele', 'lele'],
            kebutuhan_nila: ['kebutuhan_nila', 'nila'],
            kebutuhan_lain: ['kebutuhan_lain', 'ikan_lain'],
            frekuensi: ['frekuensi', 'frekuensi_menu'],
            anggaran_porsi: ['anggaran_porsi', 'anggaran', 'budget'],
            terpenuhi: ['terpenuhi', 'kebutuhan_terpenuhi'],
            kekurangan: ['kekurangan', 'jumlah_kekurangan']
        };
        
        let imported = 0;
        rows.forEach(row => {
            const mapped = mapExcelRow(row, mappings);
            
            if (!mapped.nama_sppg && !mapped.responden) return;
            
            const data = {
                verifikator: mapped.verifikator || 'Import Excel',
                tempat_tanggal: mapped.tempat_tanggal || new Date().toLocaleDateString('id-ID'),
                responden: mapped.responden || '',
                koordinat: mapped.koordinat || '',
                jk: mapped.jk || 'Laki-laki',
                umur: parseInt(mapped.umur) || 0,
                pendidikan: mapped.pendidikan || 'SMA',
                pekerjaan: mapped.pekerjaan || '',
                alamat: mapped.alamat || '',
                nama_sppg: mapped.nama_sppg || '',
                kabkota: mapped.kabkota || '',
                jml_sekolah: parseInt(mapped.jml_sekolah) || 0,
                jml_siswa: parseInt(mapped.jml_siswa) || 0,
                porsi_harian: parseInt(mapped.porsi_harian) || 0,
                porsi_bulanan: parseInt(mapped.porsi_bulanan) || 0,
                kebutuhan_lele: parseInt(mapped.kebutuhan_lele) || 0,
                kebutuhan_nila: parseInt(mapped.kebutuhan_nila) || 0,
                kebutuhan_lain: parseInt(mapped.kebutuhan_lain) || 0,
                frekuensi: parseInt(mapped.frekuensi) || 0,
                anggaran_porsi: parseInt(mapped.anggaran_porsi) || 0,
                terpenuhi: mapped.terpenuhi || 'Belum',
                kekurangan: parseInt(mapped.kekurangan) || 0
            };
            
            addData('sppgA', data);
            imported++;
        });
        
        event.target.value = '';
        renderSppgCards();
        showToast(`✅ Berhasil import ${imported} data SPPG!`);
        
    } catch (err) {
        console.error('Import error:', err);
        showToast('❌ Gagal import file Excel!');
        event.target.value = '';
    }
}

// Download Template Functions
function downloadKDMPTemplate() {
    const headers = ['Verifikator', 'Responden', 'Tanggal', 'Jenis_Kelamin', 'Umur', 'Pendidikan', 'Pekerjaan', 'Alamat', 'Koperasi', 'Badan_Hukum', 'Desa', 'Kecamatan', 'Kabupaten', 'Provinsi', 'Luas', 'Paket', 'Komoditas', 'Koordinat', 'Catatan', 'Rekomendasi'];
    const sampleRow = ['Nama Verifikator', 'Nama Responden', '2024-12-22', 'Laki-laki', '45', 'S1', 'Ketua Koperasi', 'Jl. Contoh No.1', 'Koperasi ABC', 'AHU-123456', 'Desa Contoh', 'Kec. Contoh', 'Kab. Contoh', 'Aceh', '1000', '1', 'Lele', '5.5, 95.3', 'Catatan contoh', 'Rekomendasi contoh'];
    downloadTemplateCSV('Template_KDMP', headers, sampleRow);
}

function downloadMasyarakatTemplate() {
    const headers = ['Verifikator', 'Responden', 'Tanggal', 'Koordinat', 'Jenis_Kelamin', 'Umur', 'Pendidikan', 'Pekerjaan', 'Alamat', 'Sesuai_Kebutuhan', 'Tidak_Sesuai', 'Senang', 'Alasan', 'Harapan', 'Saran'];
    const sampleRow = ['Nama Verifikator', 'Nama Responden', '2024-12-22', '5.5, 95.3', 'Perempuan', '40', 'SMA', 'Ibu Rumah Tangga', 'Jl. Contoh No.1', 'Ya, sesuai', '', 'Senang', 'Membuka lapangan kerja', 'Produksi meningkat', 'Libatkan warga'];
    downloadTemplateCSV('Template_Masyarakat', headers, sampleRow);
}

function downloadSPPGTemplate() {
    const headers = ['Verifikator', 'Responden', 'Tanggal', 'Koordinat', 'Jenis_Kelamin', 'Umur', 'Pendidikan', 'Pekerjaan', 'Alamat', 'Nama_SPPG', 'Kabupaten', 'Jml_Sekolah', 'Jml_Siswa', 'Porsi_Harian', 'Porsi_Bulanan', 'Kebutuhan_Lele', 'Kebutuhan_Nila', 'Kebutuhan_Lain', 'Frekuensi', 'Anggaran_Porsi', 'Terpenuhi', 'Kekurangan'];
    const sampleRow = ['Nama Verifikator', 'Kepala SPPG', '2024-12-22', '5.5, 95.3', 'Laki-laki', '50', 'S1', 'Kepala SPPG', 'Jl. SPPG No.1', 'SPPG Kota ABC', 'Kota ABC', '25', '5000', '4500', '99000', '1500', '1000', '500', '3', '18000', 'Belum', '800'];
    downloadTemplateCSV('Template_SPPG', headers, sampleRow);
}

function downloadTemplateCSV(filename, headers, sampleRow) {
    const csv = [
        headers.join(','),
        sampleRow.map(cell => {
            if (cell.includes(',') || cell.includes('"')) {
                return '"' + cell.replace(/"/g, '""') + '"';
            }
            return cell;
        }).join(',')
    ].join('\n');
    
    const blob = new Blob(['\ufeff' + csv], { type: 'text/csv;charset=utf-8' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `${filename}_${new Date().toISOString().slice(0,10)}.csv`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
    
    showToast('✅ Template berhasil diunduh!');
}
