<?php
require_once 'config.php';
require_once 'includes/functions.php';
require_once 'includes/header.php';
?>

<style>
/* ========== STYLE BLANC ET VERT ========== */
body {
    background: white !important;
}

.hero {
    text-align: center;
    padding: 2rem 2rem;
    background: white;
    border-radius: 1.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
}
.hero h1 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
    color: #1f2937;
}
.gradient-text {
    background: linear-gradient(135deg, #059669, #10b981);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.hero p {
    font-size: 0.9rem;
    color: #6b7280;
    margin-bottom: 1.2rem;
}
.hero-buttons {
    display: flex;
    gap: 0.8rem;
    justify-content: center;
    flex-wrap: wrap;
}
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.4rem;
    padding: 0.6rem 1.3rem;
    border: none;
    border-radius: 0.75rem;
    font-size: 0.85rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    text-decoration: none;
}
.btn-primary {
    background: linear-gradient(135deg, #059669, #10b981);
    color: white;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    background: linear-gradient(135deg, #047857, #059669);
}
.btn-outline {
    background: white;
    border: 1.5px solid #10b981;
    color: #059669;
}
.btn-outline:hover {
    background: linear-gradient(135deg, #059669, #10b981);
    color: white;
    border-color: transparent;
}
.features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}
.feature-card {
    background: white;
    padding: 1.5rem;
    border-radius: 1.5rem;
    text-align: center;
    transition: all 0.3s;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
    cursor: pointer;
    text-decoration: none;
    display: block;
    border: 1px solid #e5e7eb;
}
.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    background: linear-gradient(135deg, #059669, #10b981);
}
.feature-card:hover .feature-icon,
.feature-card:hover h3,
.feature-card:hover p {
    color: white;
}
.feature-icon {
    font-size: 2.2rem;
    margin-bottom: 0.8rem;
    display: inline-block;
}
.feature-card h3 {
    font-size: 1rem;
    color: #059669;
    margin-bottom: 0.5rem;
    transition: all 0.2s;
}
.feature-card p {
    font-size: 0.8rem;
    color: #6b7280;
    transition: all 0.2s;
}
</style>

<section class="hero">
    <h1>Bienvenue sur <span class="gradient-text">OrientPro</span></h1>
    <p>Votre plateforme intelligente d'orientation professionnelle</p>
    <?php if (!estConnecte()): ?>
        <div class="hero-buttons">
            <a href="<?= BASE_URL ?>auth/register.php" class="btn btn-primary">🚀 Commencer gratuitement</a>
            <a href="<?= BASE_URL ?>auth/login.php" class="btn btn-outline">🔐 Se connecter</a>
        </div>
    <?php else: ?>
        <div class="hero-buttons">
            <a href="<?= BASE_URL . (aRole('etudiant') ? 'etudiant/dashboard.php' : (aRole('admin') ? 'admin/dashboard.php' : 'conseiller/dashboard.php')) ?>" class="btn btn-primary">
                📊 Accéder à mon espace
            </a>
        </div>
    <?php endif; ?>
</section>

<div class="features">
    <a href="<?= BASE_URL ?>auth/register.php" class="feature-card">
        <div class="feature-icon">📋</div>
        <h3>Évaluation des Compétences</h3>
        <p>Testez vos connaissances avec nos questionnaires interactifs</p>
    </a>
    
    <a href="<?= BASE_URL ?>auth/register.php" class="feature-card">
        <div class="feature-icon">🎯</div>
        <h3>Orientation Personnalisée</h3>
        <p>Recevez des recommandations adaptées à votre profil</p>
    </a>
    
    <a href="<?= BASE_URL ?>auth/register.php" class="feature-card">
        <div class="feature-icon">📚</div>
        <h3>Ressources Pédagogiques</h3>
        <p>Accédez à une bibliothèque de ressources gratuites</p>
    </a>
    
    <a href="<?= BASE_URL ?>auth/register.php" class="feature-card">
        <div class="feature-icon">👥</div>
        <h3>Suivi par des Conseillers</h3>
        <p>Bénéficiez d'un accompagnement personnalisé</p>
    </a>
</div>

<?php require_once 'includes/footer.php'; ?>