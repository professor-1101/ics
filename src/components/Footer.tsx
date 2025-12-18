import Link from "next/link";
import Image from "next/image";

export default function Footer() {
  return (
    <footer className="bg-gray-900 text-white py-12">
      <div className="max-w-7xl mx-auto px-6">
        <div className="grid md:grid-cols-4 gap-8 mb-8">
          <div>
            <Image
              src="https://ext.same-assets.com/4188355063/3478006833.svg"
              alt="ICS Group Logo"
              width={120}
              height={60}
              className="h-10 w-auto mb-4 brightness-0 invert"
            />
            <p className="text-gray-400 text-lg">
              Protecting critical infrastructure through advanced OT/ICS cybersecurity solutions
            </p>
          </div>
          <div>
            <h3 className="text-xl font-bold mb-4">Services</h3>
            <ul className="space-y-2 text-gray-400 text-lg">
              <li>
                <Link href="#" className="hover:text-white transition-colors">
                  Audit & Compliance
                </Link>
              </li>
              <li>
                <Link href="#" className="hover:text-white transition-colors">
                  VA & Pen-Testing
                </Link>
              </li>
              <li>
                <Link href="#" className="hover:text-white transition-colors">
                  Managed Services
                </Link>
              </li>
            </ul>
          </div>
          <div>
            <h3 className="text-xl font-bold mb-4">Resources</h3>
            <ul className="space-y-2 text-gray-400 text-lg">
              <li>
                <Link href="#" className="hover:text-white transition-colors">
                  Whitepapers
                </Link>
              </li>
              <li>
                <Link href="#" className="hover:text-white transition-colors">
                  Case Studies
                </Link>
              </li>
              <li>
                <Link href="#" className="hover:text-white transition-colors">
                  Blog
                </Link>
              </li>
            </ul>
          </div>
          <div>
            <h3 className="text-xl font-bold mb-4">Connect</h3>
            <div className="flex space-x-4">
              <Link href="#" className="text-gray-400 hover:text-white transition-colors">
                <Image
                  src="https://ext.same-assets.com/4188355063/1503050275.svg"
                  alt="LinkedIn"
                  width={32}
                  height={32}
                  className="w-8 h-8"
                />
              </Link>
              <Link href="#" className="text-gray-400 hover:text-white transition-colors">
                <Image
                  src="https://ext.same-assets.com/4188355063/3084050038.svg"
                  alt="GitHub"
                  width={32}
                  height={32}
                  className="w-8 h-8"
                />
              </Link>
            </div>
          </div>
        </div>
        <div className="border-t border-gray-800 pt-8 text-center">
          <p className="text-gray-400 text-lg">© 2025 ICS Group. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
  );
}
