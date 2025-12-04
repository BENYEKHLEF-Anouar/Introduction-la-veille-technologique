# Fiche Découverte — Google Antigravity

## Date
**4 décembre 2025**

---

## Sujet exploré
**Google Antigravity** — Une plateforme de développement « agent-first » basée sur l'IA

---

## Source utilisée
- **Source principale** : Documentation officielle Google Developers & Google Blog
- **Publication** : Novembre 2025 (Annonce officielle)
- **Lien** : Google Developers Blog, Blog Google (gemini-3), Google Codelabs
- **Vérification** : Infos croisées avec des sources técnicas (Dev.to, IT Pro)

---

## Qu'est-ce que j'ai découvert ?

Google Antigravity est une **nouvelle plateforme de développement intégrée (IDE)** annoncée en novembre 2025 pour accompagner le lancement de Gemini 3. Contrairement aux assistants IA traditionnels (comme GitHub Copilot), Antigravity adopte une approche **« agent-first »** qui permet à des agents IA autonomes de planifier, exécuter et vérifier des tâches complexes de développement.

### Caractéristiques principales :

- **Interface double** : 
  - *Editor View* : IDE classique (fork de Visual Studio Code) avec une barre d'agents IA
  - *Manager View* : Panneau de contrôle permettant d'orchestrer plusieurs agents en parallèle

- **Autonomie des agents** : Les agents peuvent travailler simultanément sur :
  - L'éditeur de code
  - Le terminal
  - Le navigateur (grâce à Gemini 2.5 Computer Use)

- **Artifacts** : Les agents génèrent des livrables tangibles (plans, listes de tâches, captures d'écran, vidéos de vérification) pour prouver que le travail est fait correctement.

- **Modèles supportés** :
  - Gemini 3 Pro (par défaut)
  - Claude Sonnet 4.5 (Anthropic)
  - GPT-OSS (OpenAI)

- **Disponibilité** : Public preview gratuit (novembre 2025) sur macOS, Windows et Linux.

---

## À quoi cela sert-il dans le métier de développeur ?

Pour un développeur, Antigravity représente une **évolution majeure de l'assistance IA** :

1. **Gain de productivité** : Au lieu de rester dans une conversation linéaire avec un chatbot, tu peux déléguer 5 bugs différents à 5 agents qui travaillent en parallèle.

2. **Vérification et confiance** : Les Artifacts permettent de vérifier rapidement le travail de l'agent sans lire tout le code. Tu peux laisser des commentaires et l'agent continue sans interruption.

3. **Gestion de tâches complexes** : Au lieu d'écrire du code manuellement, tu gères l'IA comme un junior developer. Tu dis : "Fais un API REST avec validation" et l'agent planifie, code ET teste.

4. **Amélioration continue** : La plateforme dispose d'une **knowledge base** où les agents sauvegardent du contexte et des snippets de code pour s'améliorer sur les tâches futures.

5. **Apprentissage accéléré** : Pour un développeur en formation (comme à Solicode), voir un agent planifier et exécuter des tâches end-to-end offre une perspective nouvelle sur les bonnes pratiques de développement.

---

## Peux-tu l'expliquer à d'autres avec un exemple ?

**Scénario concret** :

Tu dois créer une application web pour suivre les vols d'avions avec recherche en temps réel et déploiement sur une base de données.

**Avant (sans Antigravity)** :
1. Tu ouvres ChatGPT ou Copilot dans VS Code
2. Tu demandes : "Comment faire une recherche de vols ?"
3. Tu attends la réponse et copie le code
4. Tu le colles, tu modifies, tu testes
5. Tu reviens 5 fois pour chaque feature
6. Processus long et fragile

**Avec Antigravity** :
1. Tu dis à l'agent : "Crée une app flight tracker avec recherche temps réel et déploie sur la BDD"
2. L'agent **planifie** : "Je vais créer le frontend React, l'API Node, la BDD..."
3. L'agent **exécute** : Il code, crée les fichiers, lance le serveur
4. L'agent **vérifie** : Il teste automatiquement dans le navigateur, prend une vidéo
5. L'agent **produit un Artifact** : Tu vois une vidéo du résultat final
6. Si quelque chose ne te plaît pas, tu laisses un commentaire et il ajuste

**En résumé** : Tu passes de "producteur de code" à "manager de tâches". C'est un changement fondamental dans la façon de travailler.

---

## Ma synthèse personnelle

> Antigravity n'est pas juste une nouvelle version de Copilot. C'est un **changement de paradigme** : passer d'une assistance IA *réactive* (tu demandes, elle répond) à une assistance IA *agentic* (tu délègues, elle autonome). Pour un développeur moderne, c'est comparable à passer du travail manuel à l'automatisation industrielle. L'enjeu n'est plus de savoir écrire du code, mais de savoir orchestrer l'IA pour le faire. C'est un outil clé pour rester compétent dans les années à venir.

---

## Points-clés à retenir

| Point | Détail |
|-------|--------|
| **Quoi** | Plateforme IDE agent-first par Google (novembre 2025) |
| **Pourquoi** | Permet aux agents IA de gérer des tâches complexes en autonomie |
| **Comment** | Via Gemini 3, avec Manager View pour orchestrer plusieurs agents |
| **Utilité** | Gain massif de productivité, vérification par Artifacts, apprentissage |
| **Source** | Google Developers, Google Blog, Codelabs officiels |
| **Pour un dev en formation** | Comprendre comment l'IA transforme le métier ; préparer l'avenir |

---
