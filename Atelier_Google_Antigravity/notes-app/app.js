// App Logic
document.addEventListener('DOMContentLoaded', () => {
    const noteInput = document.getElementById('noteInput');
    const addBtn = document.getElementById('addBtn');
    const notesGrid = document.getElementById('notesGrid');
    const emptyState = document.getElementById('emptyState');

    // Load notes from localStorage
    let notes = JSON.parse(localStorage.getItem('antigravity_notes')) || [];

    // Render initial notes
    renderNotes();

    // Event Listeners
    addBtn.addEventListener('click', addNote);
    noteInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            addNote();
        }
    });

    function addNote() {
        const text = noteInput.value.trim();
        if (text) {
            const newNote = {
                id: Date.now(),
                content: text,
                date: new Date().toLocaleDateString('fr-FR', { 
                    day: 'numeric', month: 'long', year: 'numeric',
                    hour: '2-digit', minute: '2-digit'
                })
            };

            notes.unshift(newNote); // Add to beginning
            saveNotes();
            renderNotes();
            noteInput.value = ''; // Clear input
            noteInput.focus();
        }
    }

    function deleteNote(id) {
        notes = notes.filter(note => note.id !== id);
        saveNotes();
        renderNotes();
    }

    function saveNotes() {
        localStorage.setItem('antigravity_notes', JSON.stringify(notes));
    }

    function renderNotes() {
        notesGrid.innerHTML = '';

        if (notes.length === 0) {
            emptyState.classList.remove('hidden');
        } else {
            emptyState.classList.add('hidden');
            
            notes.forEach(note => {
                const noteEl = document.createElement('div');
                noteEl.classList.add('note-card', 'glass-panel');
                
                noteEl.innerHTML = `
                    <div class="note-content">${escapeHtml(note.content)}</div>
                    <div class="note-date">${note.date}</div>
                    <button class="delete-btn" aria-label="Supprimer">
                        <span class="material-icons-round">close</span>
                    </button>
                `;

                // Add delete functionality
                const deleteBtn = noteEl.querySelector('.delete-btn');
                deleteBtn.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent bubbling
                    deleteNote(note.id);
                });

                notesGrid.appendChild(noteEl);
            });
        }
    }

    // Security utility to prevent XSS
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
});
