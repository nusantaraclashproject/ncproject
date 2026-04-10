#!/usr/bin/env python3
from PIL import Image
import os
from pathlib import Path

# Folder paths
img_folders = ["c:\\merchpro\\public\\img", "c:\\merchpro\\public\\img\\card"]

# Extensions to convert
extensions = [".jpg", ".jpeg", ".png"]

for folder in img_folders:
    if not os.path.exists(folder):
        continue

    print(f"Converting images in {folder}...")

    for file in os.listdir(folder):
        file_path = os.path.join(folder, file)
        file_lower = file.lower()

        # Skip if already webp or not image
        if file_lower.endswith(".webp"):
            continue

        # Check if file has valid extension
        if not any(file_lower.endswith(ext) for ext in extensions):
            continue

        try:
            # Open image and convert to RGB if needed (for transparency)
            img = Image.open(file_path)

            # Convert RGBA to RGB if necessary
            if img.mode in ("RGBA", "LA", "P"):
                rgb_img = Image.new("RGB", img.size, (255, 255, 255))
                rgb_img.paste(img, mask=img.split()[-1] if img.mode == "RGBA" else None)
                img = rgb_img

            # Save as webp
            webp_path = os.path.splitext(file_path)[0] + ".webp"
            img.save(webp_path, "WEBP", quality=90)

            # Remove original
            os.remove(file_path)
            print(f"✓ Converted: {file} → {os.path.basename(webp_path)}")
        except Exception as e:
            print(f"✗ Error converting {file}: {e}")

print("Conversion completed!")
