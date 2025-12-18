import Link from "next/link";
import Image from "next/image";
import Header from "@/components/Header";
import Footer from "@/components/Footer";

export default function WhatWeDo() {
  return (
    <div className="min-h-screen flex flex-col m-0 p-0">
      <Header />
      <main className="flex-grow">
        <div className="bg-white text-gray-900 font-sans">
          {/* Hero Section */}
          <section className="relative bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 py-24">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center max-w-4xl mx-auto">
                <h1 className="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight font-zen_dots">
                  What We Do
                </h1>
                <p className="text-2xl text-gray-100 leading-relaxed">
                  Comprehensive OT/ICS cybersecurity services tailored to protect critical infrastructure
                </p>
              </div>
            </div>
          </section>

          {/* Our Services Section */}
          <section className="bg-white py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center mb-16">
                <h2 className="text-5xl font-bold text-gray-900 mb-4 font-zen_dots">Our Services</h2>
                <p className="text-xl text-gray-700 max-w-3xl mx-auto">
                  We provide specialized security solutions designed specifically for operational technology and
                  industrial control systems
                </p>
              </div>
              <div className="grid md:grid-cols-3 gap-8">
                <div className="bg-gray-50 p-8 rounded-lg hover:shadow-xl transition-shadow">
                  <div className="flex justify-center mb-6">
                    <Image
                      src="https://ext.same-assets.com/4188355063/2853440829.svg"
                      alt="Audit & Compliance"
                      width={80}
                      height={80}
                      className="w-20 h-20"
                    />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4 text-center font-zen_dots">
                    Audit & Compliance
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    Comprehensive security audits, gap analysis, and regulatory compliance consulting for
                    frameworks such as IEC 62443, NERC CIP, and ISO 27001.
                  </p>
                </div>
                <div className="bg-gray-50 p-8 rounded-lg hover:shadow-xl transition-shadow">
                  <div className="flex justify-center mb-6">
                    <Image
                      src="https://ext.same-assets.com/4188355063/2962108224.svg"
                      alt="VA & Pen-Testing"
                      width={80}
                      height={80}
                      className="w-20 h-20"
                    />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4 text-center font-zen_dots">
                    VA & Pen-Testing
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    In-depth vulnerability assessments using NIST 800-82 and MITRE ATT&CK for ICS
                    methodologies, along with penetration testing tailored for SCADA, DCS, and other industrial
                    control environments.
                  </p>
                </div>
                <div className="bg-gray-50 p-8 rounded-lg hover:shadow-xl transition-shadow">
                  <div className="flex justify-center mb-6">
                    <Image
                      src="https://ext.same-assets.com/4188355063/2550823065.svg"
                      alt="Managed Services"
                      width={80}
                      height={80}
                      className="w-20 h-20"
                    />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4 text-center font-zen_dots">
                    Managed Services
                  </h3>
                  <p className="text-lg text-gray-700 leading-relaxed">
                    Robust protection for industrial operations by delivering continuous security monitoring and
                    rapid incident response in OT/ICS environments, minimizing downtime critical processes.
                  </p>
                </div>
              </div>
            </div>
          </section>

          {/* Detailed Services Section */}
          <section className="bg-gray-50 py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="space-y-16">
                {/* Security Assessment */}
                <div className="grid md:grid-cols-2 gap-12 items-center">
                  <div>
                    <div className="relative h-96 rounded-lg overflow-hidden">
                      <Image
                        src="https://ext.same-assets.com/4188355063/1081261782.jpeg"
                        alt="Security Assessment"
                        fill
                        className="object-cover"
                      />
                      <div className="absolute inset-0 bg-gradient-to-br from-purple-900/20 to-transparent" />
                    </div>
                  </div>
                  <div>
                    <h3 className="text-4xl font-bold text-gray-900 mb-6 font-zen_dots">
                      Security Assessment
                    </h3>
                    <p className="text-xl text-gray-700 leading-relaxed mb-6">
                      Our comprehensive security assessments identify vulnerabilities in your OT/ICS environment
                      before they can be exploited. We use industry-standard methodologies and frameworks to
                      ensure thorough coverage.
                    </p>
                    <ul className="space-y-3 text-lg text-gray-700">
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Network architecture review
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Asset inventory and classification
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Risk analysis and prioritization
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Compliance gap analysis
                      </li>
                    </ul>
                  </div>
                </div>

                {/* Incident Response */}
                <div className="grid md:grid-cols-2 gap-12 items-center">
                  <div className="order-2 md:order-1">
                    <h3 className="text-4xl font-bold text-gray-900 mb-6 font-zen_dots">Incident Response</h3>
                    <p className="text-xl text-gray-700 leading-relaxed mb-6">
                      When security incidents occur, rapid response is critical. Our team provides 24/7 incident
                      response services to minimize impact and restore operations quickly.
                    </p>
                    <ul className="space-y-3 text-lg text-gray-700">
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        24/7 emergency response
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Forensic analysis
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Recovery and remediation
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Post-incident reporting
                      </li>
                    </ul>
                  </div>
                  <div className="order-1 md:order-2">
                    <div className="relative h-96 rounded-lg overflow-hidden">
                      <Image
                        src="https://ext.same-assets.com/4188355063/2706164579.jpeg"
                        alt="Incident Response"
                        fill
                        className="object-cover"
                      />
                      <div className="absolute inset-0 bg-gradient-to-br from-purple-900/20 to-transparent" />
                    </div>
                  </div>
                </div>

                {/* Training & Awareness */}
                <div className="grid md:grid-cols-2 gap-12 items-center">
                  <div>
                    <div className="relative h-96 rounded-lg overflow-hidden">
                      <Image
                        src="https://ext.same-assets.com/4188355063/1743399028.jpeg"
                        alt="Training & Awareness"
                        fill
                        className="object-cover"
                      />
                      <div className="absolute inset-0 bg-gradient-to-br from-purple-900/20 to-transparent" />
                    </div>
                  </div>
                  <div>
                    <h3 className="text-4xl font-bold text-gray-900 mb-6 font-zen_dots">
                      Training & Awareness
                    </h3>
                    <p className="text-xl text-gray-700 leading-relaxed mb-6">
                      Empower your team with the knowledge and skills needed to maintain a secure OT/ICS
                      environment. Our training programs are tailored to your specific operational needs.
                    </p>
                    <ul className="space-y-3 text-lg text-gray-700">
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Security awareness training
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Technical skills development
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Tabletop exercises
                      </li>
                      <li className="flex items-start">
                        <span className="text-purple-800 mr-3 text-2xl">•</span>
                        Certification preparation
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>

          {/* Methodologies Section */}
          <section className="bg-white py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center mb-16">
                <h2 className="text-5xl font-bold text-gray-900 mb-4 font-zen_dots">Our Methodologies</h2>
                <p className="text-xl text-gray-700 max-w-3xl mx-auto">
                  Industry-standard frameworks and best practices
                </p>
              </div>
              <div className="grid md:grid-cols-4 gap-8">
                <div className="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                  <div className="flex justify-center mb-4">
                    <Image
                      src="https://ext.same-assets.com/4188355063/481726777.svg"
                      alt="IEC 62443"
                      width={64}
                      height={64}
                      className="w-16 h-16"
                    />
                  </div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2 font-zen_dots">IEC 62443</h3>
                  <p className="text-gray-700">Industrial automation security</p>
                </div>
                <div className="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                  <div className="flex justify-center mb-4">
                    <Image
                      src="https://ext.same-assets.com/4188355063/361194258.svg"
                      alt="NIST 800-82"
                      width={64}
                      height={64}
                      className="w-16 h-16"
                    />
                  </div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2 font-zen_dots">NIST 800-82</h3>
                  <p className="text-gray-700">ICS security guidelines</p>
                </div>
                <div className="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                  <div className="flex justify-center mb-4">
                    <Image
                      src="https://ext.same-assets.com/4188355063/918905262.svg"
                      alt="NERC CIP"
                      width={64}
                      height={64}
                      className="w-16 h-16"
                    />
                  </div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2 font-zen_dots">NERC CIP</h3>
                  <p className="text-gray-700">Critical infrastructure protection</p>
                </div>
                <div className="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                  <div className="flex justify-center mb-4">
                    <Image
                      src="https://ext.same-assets.com/4188355063/1221661172.svg"
                      alt="ISO 27001"
                      width={64}
                      height={64}
                      className="w-16 h-16"
                    />
                  </div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2 font-zen_dots">ISO 27001</h3>
                  <p className="text-gray-700">Information security management</p>
                </div>
              </div>
            </div>
          </section>

          {/* CTA Section */}
          <section className="bg-gradient-to-r from-purple-900 to-purple-800 py-16">
            <div className="max-w-4xl mx-auto px-6 text-center">
              <h2 className="text-4xl font-bold text-white mb-4 font-zen_dots">
                Ready to Secure Your Infrastructure?
              </h2>
              <p className="text-xl text-gray-100 mb-8">
                Contact us today to discuss your OT/ICS security needs
              </p>
              <Link
                href="/contact"
                className="inline-block bg-white text-purple-800 text-xl font-semibold px-10 py-4 rounded-lg hover:bg-gray-100 transition-all shadow-lg"
              >
                Get Started
              </Link>
            </div>
          </section>
        </div>
      </main>
      <Footer />
    </div>
  );
}
