"""
接口定义 — sz241-active/xt-guard/finalize_crawlers.py
仅保留模块结构与导出签名。
"""


import json
import pathlib
import shutil
import subprocess
BASE = pathlib.Path('/opt/xt-guard')
BACKUP = pathlib.Path('/var/backups/xt-crawlers-before-20260923T070000Z')
