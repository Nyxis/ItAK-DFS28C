class Personnage:
    def __init__(self, force, rapidite, intelligence, vitalite, classe, equipements=None):
        self.force = force
        self.rapidite = rapidite
        self.intelligence = intelligence
        self.vitalite = vitalite
        self.classe = classe
        self.equipements = equipements if equipements else []

    def get_stats(self):
        return {
            "Force": self.force,
            "Rapidite": self.rapidite,
            "Intelligence": self.intelligence,
            "Vitalite": self.vitalite
        }
